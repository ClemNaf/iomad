<?php

// This file is part of the Certificate module for Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package   mod_iomadcertificate
 * @copyright 2021 Derick Turner
 * @author    Derick Turner
 * @basedon   mod_certificate by Mark Nelson <markn@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$pdf = new PDF($iomadcertificate->orientation, 'mm', 'A4', true, 'UTF-8', false);

$pdf->SetTitle($iomadcertificate->name);
$pdf->SetProtection(array('modify'));
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetAutoPageBreak(false, 0);
$pdf->AddPage();

// Define variables
// Landscape
if ($iomadcertificate->orientation == 'L') {
    $x = 34;
    $y = 30;
    $sealx = 40;
    $sealy = 35;
    $sigx = 200;
    $sigy = 155;
    $custx = 47;
    $custy = 155;
    $wmarkx = 40;
    $wmarky = 31;
    $wmarkw = 212;
    $wmarkh = 148;
    $brdrx = 0;
    $brdry = 0;
    $brdrw = 297;
    $brdrh = 210;
    $codey = 175;
    $alignment = 'L';
} else { // Portrait
    $x = 10;
    $y = 40;
    $sealx = 150;
    $sealy = 220;
    $sigx = 30;
    $sigy = 230;
    $custx = 30;
    $custy = 230;
    $wmarkx = 26;
    $wmarky = 58;
    $wmarkw = 158;
    $wmarkh = 170;
    $brdrx = 0;
    $brdry = 0;
    $brdrw = 210;
    $brdrh = 297;
    $codey = 250;
}

// Get font families.
$fontsans = get_config('iomadcertificate', 'fontsans');
$fontserif = get_config('iomadcertificate', 'fontserif');

// Add images and lines
iomadcertificate_print_image($pdf, $iomadcertificate, CERT_IMAGE_BORDER, $brdrx, $brdry, $brdrw, $brdrh);
// iomadcertificate_draw_frame($pdf, $iomadcertificate);
// Set alpha to semi-transparency
// $pdf->SetAlpha(0.2);
// iomadcertificate_print_image($pdf, $iomadcertificate, CERT_IMAGE_WATERMARK, $wmarkx, $wmarky, $wmarkw, $wmarkh);
// $pdf->SetAlpha(1);
// iomadcertificate_print_image($pdf, $iomadcertificate, CERT_IMAGE_SEAL, $sealx, $sealy, '', '');
// iomadcertificate_print_image($pdf, $iomadcertificate, CERT_IMAGE_SIGNATURE, $sigx, $sigy, '', '');

// Add text
$pdf->SetTextColor(0, 0, 120);
$pdf->SetTextColor(90, 45, 232);
iomadcertificate_print_text($pdf, $x, 171, $alignment, $fontsans, '', 12, iomadcertificate_get_date($iomadcertificate, $certrecord, $course, $certuser->id));
iomadcertificate_print_text($pdf, 10, $y + 34, 'C', $fontserif, 'B', 38, fullname($certuser));
