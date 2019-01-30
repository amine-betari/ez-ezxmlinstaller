<?php
//
// Created on: <2007-12-28 06:09:00 dis>
//
// SOFTWARE NAME: eZ XML Installer extension for eZ Publish
// SOFTWARE RELEASE: 0.x
// COPYRIGHT NOTICE: Copyright (C) 1999-2012 eZ Systems AS
// SOFTWARE LICENSE: GNU General Public License v2.0
// NOTICE: >
//   This program is free software; you can redistribute it and/or
//   modify it under the terms of version 2.0  of the GNU General
//   Public License as published by the Free Software Foundation.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of version 2.0 of the GNU General
//   Public License along with this program; if not, write to the Free
//   Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
//   MA 02110-1301, USA.
//
//

$Module = array( 'name' => 'XML Export',
                 'variable_params' => true );


$ViewList['classes'] = array(
    'functions' => array( 'export' ),
    'script' => 'classes.php',
    'params' => array( ) );
$ViewList['roles'] = array(
    'functions' => array( 'export' ),
    'script' => 'roles.php',
    'params' => array( ) );
$ViewList['assignroles'] = array(
    'functions' => array( 'export' ),
    'script' => 'assignroles.php',
    'params' => array( ) );
$ViewList['content'] = array(
    'functions' => array( 'export' ),
    'script' => 'content.php',
    'params' => array( 'NodeId' ) );
$ViewList['selection'] = array( 'script' => 'selection.php', 
    'default_navigation_part' => 'exportselectionnavigationpart',
   'functions' => array( 'export' ),
   'unordered_params' => array( 'context' => 'context' ),
    'single_post_actions' => array( 'AddButton' => 'Add',
                                    'RemoveButton' => 'Remove',
                                    'ExportButton' => 'Export'),
    'post_actions' => array( 'BrowseActionName' )

    );


$FunctionList = array();
$FunctionList['export'] = array( );

?>
