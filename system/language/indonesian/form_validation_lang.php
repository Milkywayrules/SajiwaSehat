<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2018, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2018, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['form_validation_required']		= '{field} harus diisi.';
$lang['form_validation_isset']			= '{field} harus memiliki value.';
$lang['form_validation_valid_email']		= '{field} harus mengandung email yang valid.';
$lang['form_validation_valid_emails']		= '{field} harus mengandung semua email yang valid.';
$lang['form_validation_valid_url']		= '{field} harus mengandung URL yang valid.';
$lang['form_validation_valid_ip']		= '{field} harus mengandung IP yang valid.';
$lang['form_validation_min_length']		= '{field} minimal memiliki {param} karakter.';
$lang['form_validation_max_length']		= '{field} maksimal memiliki {param} karakter.';
$lang['form_validation_exact_length']		= '{field} harus memiliki persis {param} karakter.';
$lang['form_validation_alpha']			= '{field} hanya boleh berisi karakter alfabet.';
$lang['form_validation_alpha_numeric']		= '{field} hanya boleh berisi alpha-numeric karakter.';
$lang['form_validation_alpha_numeric_spaces']	= '{field} hanya boleh berisi karakter alpha-numeric dan spaces.';
$lang['form_validation_alpha_dash']		= '{field} hanya boleh berisi alpha-numeric, garis bawah, dan strip.';
$lang['form_validation_numeric']		= '{field} hanya boleh berisi nomor.';
$lang['form_validation_is_numeric']		= '{field} hanya boleh berisi karakter angka.';
$lang['form_validation_integer']		= '{field} harus mengandung integer.';
$lang['form_validation_regex_match']		= '{field} tidak memiliki format yang benar.';
$lang['form_validation_matches']		= '{field} harus sama dengan kolom {param}.';
$lang['form_validation_differs']		= '{field} harus berbeda dengan kolom {param}.';
$lang['form_validation_is_unique'] 		= '{field} harus memiliki value yang unik.';
$lang['form_validation_is_natural']		= '{field} hanya boleh berisi digits.';
$lang['form_validation_is_natural_no_zero']	= '{field} hanya boleh berisi digits dan harus lebih besar daripada nol.';
$lang['form_validation_decimal']		= '{field} harus berisi angka desimal.';
$lang['form_validation_less_than']		= '{field} harus berisi nomor yang lebih kecil dari kolom {param}.';
$lang['form_validation_less_than_equal_to']	= '{field} harus berisi angka yang lebih kecil atau sama dengan kolom {param}.';
$lang['form_validation_greater_than']		= '{field} harus berisi angka yang lebih besar dari kolom {param}.';
$lang['form_validation_greater_than_equal_to']	= '{field} harus berisi angka yang lebih besar atau sama dengan kolom {param}.';
$lang['form_validation_error_message_not_set']	= 'Tidak bisa mengakses error dengan nama kolom {field}.';
$lang['form_validation_in_list']		= '{field} harus salah satu dari: {param}.';
