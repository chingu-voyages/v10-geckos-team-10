@extends('layouts.main')
@section('content')
<section class="page" id="page1">
	@include('partials.header')
	<div class="jumbotron row col" style="margin: 90 auto; background-color: rgba(0,0,0,0); color: white; width: 1000px;">
		<h1 id="write" style="font-size: 7vw; font-weight: lighter"></h1>
	</div>
</section>
<section class="subPage" id="page2">
	<div class="container-fluid" id="copyText">
		<div class="row">
			<div class="col-md-6" style="background-color: greens" id="intros">
				<h3>Let us write you an AMAZING copy...</h3>
				<br />
				<blockquote>
					Copywriting is an art, and we have mastered it. <br />
					We are a network of professional copywriters who have each been in
					the business for a long period of time. <br /><br />
					We have experience in writing business communications, effective
					marketing copies, marketing campaigns and we are known for our
					prowess in making every word worth the investment <br />
					<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
					eiusmod tempor incididunt it labore et dolore magna aliqua
				</blockquote>
			</div>
			<div class="col-md-6" style="background-color: reds" id="reviews">
				<blockquote>
					<span>
						<!-- insert font awesome open quotation marks here -->
					</span>
					I have always worked with Geckos for all our copywriting needs.
					Their copywriters have proven they are skilled at making any copy
					for whatever business need arises. <br />
					Totally worth every penny
					<span>
						<!-- insert font awesome close quotation marks here -->
					</span>
					<br /><br />
					<span>Julian, Blah Inc.</span>
				</blockquote>
			</div>
		</div>
	</div>
</section>
<section class="subPage" id="page3">
	<h4 class="text-center">...if your business includes...</h4>
	<div id="businessFunctions">
		<div class="row">
			<div class="card-columns col-12">
				<div class="cards col-lg mb-5 mt-5 border-0">
					<span class="cards-span text-center">
						<i class="far fa-envelope fa-4x"></i>
					</span>
					<div class="card-body">
						<h5 class="card-title">Email Marketing</h5>
					</div>
				</div>
				<div class="cards col-lg mb-5 mt-5 border-0">
					<span class="cards-span text-center">
						<i class="fas fa-rss fa-4x"></i>
					</span>
					<div class="card-body">
						<h5 class="card-title text-center">Blog Posts</h5>
					</div>
				</div>
				<div class="cards col-lg mb-5 mt-5 border-0">
					<span class="cards-span text-center">
						<i class="fas fa-bullhorn fa-4x"></i>
					</span>
					<div class="card-body">
						<h5 class="card-title text-center">Marketing Campaigns</h5>
					</div>
				</div>
			</div>
			<div class="card-columns col-12">
				<div class="card col-lg mb-5 mt-5 border-0">
					<span class="cards-span text-center">
						<i class="far fa-comments fa-4x"></i>
					</span>
					<div class="card-body">
						<h5 class="card-title text-center">Customer Communications</h5>
					</div>
				</div>
				<div class="cards col-lg mb-5 mt-5 border-0">
					<span class="cards-span text-center">
						<i class="fas fa-users fa-4x"></i>
					</span>
					<div class="card-body">
						<h5 class="card-title text-center">Social Media</h5>
					</div>
				</div>
				<div class="cards col-lg mb-5 mt-5 border-0">
					<span class="cards-span text-center">
						<i class="fas fa-poll fa-4x"></i>
					</span>
					<div class="card-body">
						<h5 class="card-title text-center">Industry Reports</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="subPage" id="page4">
	<h4 class="text-center">...at the best prices you can get...</h4>
	<div class="container" id="priceContainer">
		<div class="row">
			<div class="priceTab col-12 col-md-4">
				<div class="priceCard" id="basicPrice">
					<div class="priceCardHeader">Basic</div>
					<div class="priceCardCurrency">NGN</div>
					<div class="priceCardPrice">30/word</div>
					<div class="priceCardText">
						Suitable for blog posts, social media and PPC ads.
					</div>
				</div>
				<button type="button" class="quoteButton" id="basicQuote">
				Request Quote
				</button>
			</div>
			<div class="priceTab col-12 col-md-4">
				<div class="priceCard" id="advancedPrice">
					<div class="priceCardHeader" id="advancedPriceCardHeader">
						Advanced
					</div>
					<div class="priceCardCurrency">NGN</div>
					<div class="priceCardPrice">15000/hr</div>
					<div class="priceCardText">
						For projects slightly bigger than the basic plan.
					</div>
				</div>
				<button type="button" class="quoteButton" id="advancedQuote">
				Request Quote
				</button>
			</div>
			<div class="priceTab col-12 col-md-4">
				<div class="priceCard" id="proPrice">
					<div class="priceCardHeader">Pro</div>
					<div class="priceCardCurrency">NGN</div>
					<div class="priceCardPrice">450000/day</div>
					<div class="priceCardText">
						For campaigns, hire us at this price for a day.
					</div>
				</div>
				<button type="button" class="quoteButton" id="proQuote">
				Request Quote
				</button>
			</div>
		</div>
	</div>
	<div class="otherProjects">
		<p>OR</p>
		<p>
			<span><a href="#">Contact Us</a></span>
			for other projects
		</p>
	</div>
</section>
<footer>
	<div class="container-fluid">
		<div class="row"></div>
	</div>
</footer>
@endsection