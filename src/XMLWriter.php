<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 01.10.2019
 * Time: 13:25
 */

namespace Imper86\XMLWriter;


class XMLWriter extends \XMLWriter
{
    public function writeCdataElement(string $name, string $cdataContent)
    {
        $this->startElement($name);
        $this->writeCdata($cdataContent);
        $this->endElement();

        return true;
    }
}
