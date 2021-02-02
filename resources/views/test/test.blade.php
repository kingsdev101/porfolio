@extends('layouts.app')
<style>


section div:nth-child(odd){
    background-color: #333;
    color: #ffff;
    text-align: center;   

}
section div:nth-child(even){
    background-color: #3bcced;
}

section div{
    font-size: 72px;
    min-height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
@section('content')
<div class="typoghraohy">

    <h1>Secondary Text Check</h1>
    <small> Hello I am Web Developer</small>
    <blockquote>time build</blockquote>
</div> 

<!-- the text will change automatically if the bootrap link correctly  -->
 <section class="row">
    <div class="col-lg-3 col-md-6 col-sm-12 a">a</div>
    <div class="col-lg-3 col-md-6 col-sm-12 b">b</div>
    <div class="col-lg-3 col-md-6 col-sm-12 c">c</div>
    <div class="col-lg-3 col-md-6 col-sm-12 d">d</div>
</section>

<table class=" table table-bordered table-dark">
    <th>Name</th>
    <th>Course</th>
    <th>Status</th>
    <tr>
        <td>Brian Orbino</td>
        <td>BSIT</td>
        <td>Kung may mag abot ah</td>
    </tr>
    <tr>
        <td>Kate unknow</td>
        <td>BSED</td>
        <td>Single </td>
    </tr>
    <tr>
        <td>Ashley</td>
        <td>Dont know</td>
        <td>ok lang</td>
    </tr>
</table>
@endsection 