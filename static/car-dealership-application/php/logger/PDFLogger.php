<?php

// Necessary requirement statements for the current .php file.
require('./../fpdf/fpdf.php');

class PDFLogger extends Logger implements LoggerInterface
{

    // Attributes/fields of the class.
    private $current_document;

    // Constructor of the class.
    public function __construct(string $file_name){

        // Instantiate a new PDF document with the aid of FPDF library.
        $this->current_document = new FPDF();

        // Set the title of the document.
        $this->current_document->SetTitle($file_name);

        // Add a new blank page to the document.
        $this->current_document->AddPage();

        // Set the font of the current document.
        $this->current_document->SetFont('Arial', 'I', 18);

    }

    public function write(string $information): bool
    {
        // Make sure that the input that was provide to the method by the caller is valid.
        assert($information != "");

        $this->current_document->Write(18, $information);

        $this->current_document->Output();

        // Return a true flag value to the caller so as to indicate that the subroutine finished executing as specified.
        return true;
    }
}