
<!DOCTYPE html>
<html>
<head>
	<title>Edit Child Details</title>
</head>
<style>
	body{
		background-repeat:no-repeat;
		background: url('childback.jpg');
	}
	div{
		padding:20;
		font-size:20;
	}
	.text{
		background-color:#c2d6d6;
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
<form method="get" class="container" action="{{route('parent1.update', $parent1->id)}}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
<div>
<center><h1>Update Child Details</h1></center>
<label><b>First Name</b></label></br>
<input type="text" name="fname" class="text" size="70" value="{{ $parent1->fname }}"/></br></br>
<label><b>Last Name</b></label></br>
<input type="text" name="lname" class="text" size="70" value="{{ $parent1->lname }}"/></br></br>
</br></br>
<label><b>Last Name</b></label></br>
<input type="text" name="gender" class="text" size="70" value="{{ $parent1->gender }}"/></br></br>
</br></br>
<label><b>Date</b></label></br>
<input type="date" name="date" class="text" size="70" value="{{ $parent1->date }}"/></br></br>
</br></br>
<label><b>Weight</b></label></br>
<input type="number" name="weight" class="text" size="70" value="{{ $parent1->weight}}"/></br></br>
</br></br>
<label><b>Height</b></label></br>
<input type="number" name="height" class="text" size="70" value="{{ $parent1->height}}"/></br></br>
</br></br>
<center><input type="submit" name="editchild" value="Edit Details"/></center>

</div>
</body>
</html>
