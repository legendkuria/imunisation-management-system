@extends('Admin.side')
<!DOCTYPE html>
<html>
<head>
	<title>View Child Details</title>
    <link rel='stylesheet'  href="{{ url('/css/style.css')}}">
</head>
<style>
	body{
		background-repeat:no-repeat;
		
	}
	div{
		padding:20;
		font-size:20;
	}
	.print{
        background:#5894d8;
        font-size:15px;
        padding: 7px;
        width: 10%;
        border-radius: 5px;
        color:white;

	}
	.text{
		background-color:white;
		border:none;
		padding:9px 10px;
	}
	.container {
	    position:absolute;
	    margin: 22px 50px 50px 40px;
	    padding: 25px;
        left: 300px;
	    background-color: white;
	    font-family:Century Gothic;
	}
	select{
		width: 200px;
		height: 30px;
	}
	input[type='submit']{
		width:130px;
		height:35px;
		border-radius:50px 50px 50px 50px;
	}
</style>

<body>
<form action="" method="" id="tic" class="container" enctype="multipart/form-data">

<div>
<h1 style="color:black;"><b>VIEW CHILD DETAILS<b></h1><hr><br><br>
<label><b>child id</b></label>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
<input type="text" name="id" class="text" size="40" value="{{ $parent1->id}}" readonly/>
<label><b>Child Name</b></label>
<input type="text" name="cname" class="text" size="40" value="{{ $parent1->cname }}" readonly/></br></br>
<label><b> Child Gender</b></label>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
<input type="text" name="gender" class="text" size="34" value="{{ $parent1->gender }}" readonly/>
<label><b> Child Date Of Birth</b></label>
&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
<input type="date" name="date" class="text" size="40" value="{{ $parent1->date }}" readonly/></br></br>
</br></br>
 <label ><b>Child Location:</b></label>&nbsp; &nbsp;
<input type="tex" name="weight" class="text" size="35" value="{{ $parent1->location}}" readonly/>

<label><b> Child Weight</b></label>
<input type="number" name="weight" class="text" style="width: 100px" value="{{ $parent1->weight}}" readonly/></br></br>
</br></br>
<label><b> Child Height</b></label>
<input type="number" name="height" class="text" size="10" value="{{ $parent1->height}}"readonly/> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
<label><b>Vaccine Name</b></label>
<input type="text" name="vname" class="text" size="10" value="{{ $parent1->vname}}"  readonly /></br></br></br></br>
<hr><br>
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
<button type="button" class="print" onclick="myPrint('tic')">Print Details</button>
</div>
</form>
<script>
    function myPrint(tic) {
        var printdata = document.getElementById(tic);
        newwin = window.open("");
        newwin.document.write(printdata.outerHTML);
        newwin.print();
        newwin.close();
    }
</script>
</body>

</html>
