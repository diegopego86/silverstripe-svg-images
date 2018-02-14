<?php
namespace Restruct\SVGImages\ViewableData;
// only extend if exists
if(class_exists('StevieMayhew\SilverStripeSVG\SVGTemplate')) {
    use StevieMayhew\SilverStripeSVG\SVGTemplate;
    
    class SVGImage_Template extends SVGTemplate
    {

        public function __construct($name, $id)
        {
            return parent::__construct($name, $id);
        }

        public function LimitID($id)
        {
            $this->id = $id;
            return $this;
        }

        public function addSubfolder($folder)
        {
            // prevent adding subfolders
            //$this->subfolders[] = trim($folder, DIRECTORY_SEPARATOR);
            return $this;
        }

    }

}