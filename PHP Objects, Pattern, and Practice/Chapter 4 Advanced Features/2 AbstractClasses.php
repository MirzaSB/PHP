<?php
abstract class ShopProductWriter{
    protected $products = array();

    public function addProduct(ShopProduct $shopProduct) {
        $this->products[] = $shopProduct;
    }

    abstract public function write();

}

class XmlProductWriter extends ShopProductWriter {

    public function write() {
        $writer = new XMLWriter();
        $writer ->openMemory();
        $writer->startDocument('1.0', 'UTF-8');
        $writer->startElement("products");
        foreach($this->products as $shopProduct) {
            $writer->startElement("product");
            $writer->writeAttribute("title", $shopProduct->getTitle());
            $writer->startElement("summary");
            $writer->text($shopProduct->getSummaryLine());
            $writer->endElement(); //for summary
            $writer->endElement(); //for product
        }

        $writer->endElement(); //products
        $writer->endDocument();
        print $writer->flush();
    }
}

class TextProductWriter extends ShopProductWriter {
    public function write() {
        $str = "PRODUCTS:\n";
        foreach($this->products as $shopProduct) {
            $str .= $shopProduct->getSummaryLine()."\n";
        }
        print $str;
    }
}

?>