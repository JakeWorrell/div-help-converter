<?php


mkdir('output');
mkdir('output/docs');

$source = iconv("CP437", "UTF-8",file_get_contents(__DIR__ .'/help/help.div'));
$parser = new DivHelpParser();
$pages = $parser->getPages($source);

$mkdocsConfig =['site_name: DIV Documentation','theme: readthedocs','pages:','- \'Home\': \'index.md\''];
$filenames=[];

file_put_contents('output/docs/index.md', 'just some index content');

// Pre decide filenames
foreach ($pages as $page) {
    $filenames[$page->getNumber()] = sanitiseFilename($page->getTitle()) . '.md';
}

//generate the pages
foreach ($pages as $page) {
    $filename = $filenames[$page->getNumber()];

    file_put_contents(
        'output/docs/' . $filename,
        $parser->contentToMarkdown($page->getContent(), $filenames)
    );

    $mkdocsConfig[] = sprintf(
        "- '%s': '%s'",
        str_replace(
            '\'','\'\'' ,
            $page->getTitle()
        ),
        $filename
    );
}

file_put_contents('output/mkdocs.yml',implode("\n", $mkdocsConfig));

function sanitiseFilename($filename){
    $orig = $filename;

    $filename = str_replace('...','to',$filename);
    $filename = str_replace('.','dot',$filename);
    $filename = str_replace(',','comma',$filename);
    $filename = str_replace('!','not',$filename);
    $filename = str_replace('=','equal',$filename);
    $filename = str_replace('+','plus',$filename);
    $filename = str_replace('-','minus',$filename);
    $filename = str_replace('*','asterisk',$filename);
    $filename = str_replace('>','gt',$filename);
    $filename = str_replace('<','lt',$filename);
    $filename = str_replace('&','and',$filename);
    $filename = str_replace('|','pipe',$filename);
    $filename = str_replace('"','double_quote',$filename);
    $filename = str_replace('%','percent',$filename);
    $filename = str_replace(' ','_',$filename);
    $filename = str_replace(':','colon',$filename);
    $filename = str_replace(';','semicolon',$filename);
    $filename = str_replace("'",'apostrophe',$filename);
    $filename = str_replace('^','caret',$filename);
    $filename = str_replace('\\','backslash',$filename);
    $filename = str_replace('/','forward_slash',$filename);

    $filename = preg_replace('/[^a-z0-9\_\(\)\[\]]/', '', strtolower((string)$filename));
    if ($filename == ""){
        throw new Exception ("could not determine a filesystem safe filename for '{$orig}'");
    }
    return $filename;
}
class DivHelpParser {
    /**
     * @param $source
     * @return DivHelpPage[]
     */
    public function getPages($source){
        $page = null;
        $pages = [];

        $terminusDefinition = '/(\{\.\d+\,.+?\})/';
        $chunks = preg_split($terminusDefinition, $source, null, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);

        foreach ($chunks as $chunk) {
            switch (preg_match($terminusDefinition,$chunk)){
                case 0:
                    if ($page instanceof DivHelpPage) { //making a bit of an assumption here
                        $page->setContent(trim($chunk));
                        $pages[]=$page;
                        $page = null;
                    }
                    break;
                case 1:
                    list ($number, $text) = $this->readTerminusDefinition($chunk);
                    $page = new DivHelpPage($number, $text);
                    break;
            }
        }
        return $pages;
    }

    public function readTerminusDefinition($definition){
        list($number, $text) = explode(',', $definition);
        if (!$text){ //TODO - This is a massive cheat, replace with better terminus parsing
            $text = ',}';
        }

        $number = substr($number,2);
        $text = substr($text,0,-1);

        return [$number, $text];
    }

    /**
     * @param $content
     * @param $filenames a list of terminus references plus their .md filenames so that links can be created
     * @return mixed
     */
    public function contentToMarkdown($content, $filenames){
        // remove things we can't handle yet - images
        $content = preg_replace('/{\+\d,\d}{-}/m','',$content);

        // replace dividers
        $content = str_replace('{/}',"---------------------------------------\n",$content);
        
        // remove comments
        $content = preg_replace('/^\#.*(\n|\Z)/m','',$content);

        // replace custom "Simple carriage return" character
        $content = str_replace("·", "\n", $content);

        // reformat headings
        $content = preg_replace('/\{((\w| )+)\:\}/m','### ${1}', $content);

        // reformat emphasis
        $content = preg_replace('/\{((\w| )+)\}/m','**${1}**', $content);

        //reformat code examples
        $content = preg_replace_callback(
            '/{#9999,(.*):}(.+){-}/ms',
            function($matches) use ($filenames){
                list($match, $title, $code) = $matches;
                return sprintf("### %s\n```\n%s\n```\n", $title, trim($code));
            },
            $content
        );

        // replace terminus references
        $content = preg_replace_callback(
            '/\{#(\d+),(.+)}/m',
            function($matches) use ($filenames){
                list($match, $number, $title) = $matches;
                return sprintf('[%s](%s)', $title, $filenames[$number]);
            },
            $content
        );
        return $content;
    }
}

class DivHelpPage {
    private $title;
    private $number;
    private $content;

    /**
     * DivHelpPage constructor.
     * @param $title
     * @param $number
     * @param $content
     */
    public function __construct($number=null, $title =null, $content = null)
    {
        $this->title = $title;
        $this->number = $number;
        $this->content = $content;
    }


    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }


}