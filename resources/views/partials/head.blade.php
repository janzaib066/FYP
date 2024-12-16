<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        
        <title>Trip Share</title>
        <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
        <meta content="" name="keywords">
        <meta content="" name="author">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
        <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet" type="text/css" id="mdb">
        <link href="{{ asset('css/plugins.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/coloring.css') }}" rel="stylesheet" type="text/css">
        <link id="colors" href="{{ asset('css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body onload="initialize()"> 

        <div id="wrapper">

            <div id="de-preloader"></div>