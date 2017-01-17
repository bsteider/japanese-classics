
<!DOCTYPE html>
<html>
	<head>
		<title>James Aoki Persona</title>
	</head>
	<body>
		<h1>Basic Information</h1>
		<ul>
			<!-- TEST -->
			<li>James Aoki</li>
			<li>24 years old, male</li>
			<li>Works as a mechanic at NM Imports</li>
			<li>Uses Windows Laptop</li>
			<li>Needs: Mechanic who collects cars from Japan that are now legal in the United States. </li>
		<h2>use case</h2>
		<ol>
			<p>James needs to find a car easily so he can get the process going. He needs a car to start building his market to attract people to his shop. If the car is attractive, people will want what he has. He gets on his computer/phone and goes to the website to view all available inventory.</p>
		</ol>
		<h2>Interaction Flow</h2>
		<ol>
			<li>Opens Japaneseclassicsllc.com on phone or computer</li>
			<li>No login needed, allows immediate browsing</li>
			<li>scroll to the bottom to view all inventory, or click inventory at the top of the screen</li>
			<li> Website displays all available cars, sold and still available with price underneath</li>
			<li>Once the ideal car is found, contact information can be found on the top nav bar, and further information can be obtained through the company</li>
		</ol>
		<p><p id="description">this is a link to <a href="https://japaneseclassics.com">japanese classics llc</a></p></p>

		<h2>Listing</h2>
		<ol>listingId (primary key)</ol>
		<ol>listingInfo</ol>
		<ol>listingPrice</ol>

		<h2>user</h2>
		<ol>userId (primary key)</ol>
		<ol>userContact</ol>
		<ol>userFaq</ol>

		<h2>Image</h2>
		<ol>ImageId (primary key)</ol>
		<ol>imageListingId (foreign key)</ol>
		<ol>imageDate</ol>

	</body>
</html>