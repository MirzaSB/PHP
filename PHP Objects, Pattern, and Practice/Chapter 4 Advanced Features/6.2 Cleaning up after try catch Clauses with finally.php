<?php


class Runner {
    static function init() {
        $fh = fopen("./log.txt","w");
        try {
            fputs( $fh, "start\n" );
            $conf = new Conf( dirname(__FILE__)."/conf.broken.xml" );
            print "user: ".$conf->get('user')."\n";
            print "host: ".$conf->get('host')."\n";
            $conf->set("pass", "newpass");
            $conf->write();
        } catch ( FileException $e ) {
            // permissions issue or non-existent file
            fputs( $fh, "file exception\n" );
            throw $e;
        } catch ( XmlException $e ) {
            fputs( $fh, "xml exception\n" );
            // broken xml
        } catch ( ConfException $e ) {
            fputs( $fh, "conf exception\n" );
            // wrong kind of XML file
        } catch ( Exception $e ) {
            fputs( $fh, "general exception\n" );
            // backstop: should not be called
        } finally {
            fputs( $fh, "end\n" );
            fclose( $fh );
        }
    }
}

?>