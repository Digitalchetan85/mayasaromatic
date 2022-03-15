<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function display_error($validation, $field) {
    if (isset($validation)) {
        if ($validation->hasError($field)) {
            return $validation->getError($field);
        } else {
            return false;
        }
    }
}
