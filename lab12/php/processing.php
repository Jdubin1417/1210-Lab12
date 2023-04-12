<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>MadLib!</title>
		<link rel="icon" href="../images/alfred.ico"/>
		<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="../css/form.css" rel="stylesheet">
		<style>
			body { font-size: 1.5em; }
		</style>
	</head>
	<body style="background-color:#000;">
		<img class="fixedPos" src="../images/alfred.jpg" alt="Alfred E. Neuman">
		<div style="width:800px; margin:0 auto; background-color:#FDFDFD; border:4px double #00A;"> 
			<h1>Today's MadLib!</h1>
			<hr />
			<p style="padding:25px; text-align:left;"> 
                Good 
                <span style="color:red;"><?php if(isset($_GET['tod'])){echo ucfirst($_GET['tod']);} ?></span> 
                Hank, it's Friday. No it's not. I'm so bad at 
                <span style="color:red;"><?php if(isset($_GET['nounp1'])){echo ucfirst($_GET['nounp1']);} ?></span>. 
                I wanted to tell you about my new book. The 
                <span style="color:red;"><?php if(isset($_GET['noun1'])){echo ucfirst($_GET['noun1']);} ?></span> in our 
                <span style="color:red;"><?php if(isset($_GET['nounp2'])){echo ucfirst($_GET['nounp2']);} ?></span>. 
                Set in 
                <span style="color:red;"><?php if(isset($_GET['year'])){echo ucfirst($_GET['year']);} ?></span> 
                <span style="color:red;"><?php if(isset($_GET['loc'])){echo ucfirst($_GET['loc']);} ?></span>, 
                it follows a young couple named 
                <span style="color:red;"><?php if(isset($_GET['bname'])){echo ucfirst($_GET['bname']);} ?></span> and 
                <span style="color:red;"><?php if(isset($_GET['gname'])){echo ucfirst($_GET['gname']);} ?></span>, 
                who meet in the basement of a 
                <span style="color:red;"><?php if(isset($_GET['building'])){echo ucfirst($_GET['building']);} ?></span> 
                and fall in love at their meeting group for battling 
                <span style="color:red;"><?php if(isset($_GET['noun2'])){echo ucfirst($_GET['noun2']);} ?></span>. 
                They travel to 
                <span style="color:red;"><?php if(isset($_GET['location'])){echo ucfirst($_GET['location']);} ?></span>,  
                where they meet 
                <span style="color:red;"><?php if(isset($_GET['author'])){echo ucfirst($_GET['author']);} ?></span> 
                and learn the meaning of true 
                <span style="color:red;"><?php if(isset($_GET['emo'])){echo ucfirst($_GET['emo']);} ?></span>. 
                Anyway, it comes out on 
                <span style="color:red;"><?php if(isset($_GET['date'])){echo ucfirst($_GET['date']);} ?></span> 
                and I hope you'll all 
                <span style="color:red;"><?php if(isset($_GET['verb1'])){echo ucfirst($_GET['verb1']);} ?></span> 
                it.
                
			
			<p style="width: 150px; margin:0 auto;">
				<?php echo "<a style='text-decoration:none;' href='javascript:history.go(-1)'><i class='fas fa-arrow-circle-left'></i> GO BACK</a>"; ?>	
			</p>
		 </div>
		<script src="/js/w3c.js"></script>	
	</body>
</html>