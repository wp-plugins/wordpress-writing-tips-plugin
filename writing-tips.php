<?php
/**
 * @package Writing_Tips
 * @version 1.0
 */
/*
Plugin Name: WordPress Writing Tips Plugin
Plugin URI: http://meadowsinteractive.com/wordpress-writing-tips-plugin/
Description: Displays professional writing tips, copywriting style and blogging advice at the top of WP admin pages. Functions similar to "Hello Dolly" plugin, which it's based on. The quick tips for this plugin were written by Brian Milne, who spent a decade in the newspaper business as a senior writer and editor before becoming a WP junkie. Thanks to ma.tt for helping this writer become an "plugin author." A free plugin courtesy <a href="http://meadowsinteractive.com/">MeadowsInteractive.com</a>.
Author: Brian Milne 
Version: 1.0
Author URI: http://twitter.com/bmilneslo
*/

function hello_writing_get_tip() {
	/** These are the writing tips */
	$tips = "<b>WRITING TIP</b> - abbreviations/acronyms: Use a source's complete name on first reference followed by the abbreviation in parenthesis, abbreviate on second reference.
<b>WRITING TIP</b> - blog: Rather than Web log.
<b>WRITING TIP</b> - canceled: One L.
<b>WRITING TIP</b> - dates: Abbreviate the month and use numerals without st, nd, rd or th. If only the month and year are used, there is no abbreviation for the month. Example: Jan. 1, 2013 ... January 2014.
<b>WRITING TIP</b> - email: Should not be hyphenated.
<b>WRITING TIP</b> - Emoticons :-): Avoid unless writing in an informal manner.
<b>WRITING TIP</b> - exclamations!: Don't overuse them! OK in congratulation titles or some thank you messaging, but limit to one or two per page/email.
<b>WRITING TIP</b> - headlines: In headlines/titles and subheads, use title case rules, rather than AP's headline style. In HTML, use h2 and h3 tags with relevant keywords (rather only using the bold tag) to help with SEO.
<b>WRITING TIP</b> - Internet: Uppercase; also notable: web, website, online.
<b>WRITING TIP</b> - its vs. it's: Only use it's as a contraction for it is.
<b>WRITING TIP</b> - its vs. their: Use their for people or a community, its for objects, companies, etc.
<b>WRITING TIP</b> - job titles: Capitalize when used before the name, not after. 
<b>WRITING TIP</b> - login, log in: Login: noun; log in: verb.
<b>WRITING TIP</b> - millions: In text, use the numeral followed by millions for clarity. In titles you can use the abbreviation M.
<b>WRITING TIP</b> - numbers: Spell out numbers 1-9 when space allows. Use digits from 10+ unless starting a sentence with a number.
<b>WRITING TIP</b> - online: Lowercase.
<b>WRITING TIP</b> - periods: Use single space after periods. Periods/punctuation should be included inside the quotation mark if at the end of a sentence.
<b>WRITING TIP</b> - spacing: One space between periods and next sentence. One-line break between paragraphs (web).
<b>WRITING TIP</b> - time: Use figures, a.m./p.m. and note PST/EST.
<b>WRITING TIP</b> - titles/headlines: In headlines/titles and subheads, use title case rules, rather than AP's headline style.
<b>WRITING TIP</b> - web: Lowercase.
<b>WRITING TIP</b> - website: Lowercase, one word.
<b>WRITING TIP</b> - Along with tightening up your writing and getting to the point early in posts (getting a keyword phrase in the first couple sentences is a best practice across the board), it's always a good idea to break up the main body text with subtitles and bullets.
<b>WRITING TIP</b> - Subtitles not only break up your post into digestible pieces, but they're an ideal place to inject keyword phrases as H2 tags, further improving your SEO efforts.
<b>WRITING TIP</b> - Bulleted lists such as Top 10s are another popular approach, not only because they're interesting and generate traffic in a hurry, but because they're easier to read on both the traditional and mobile web.
<b>WRITING TIP</b> - If you're writing about a subject readers on the move could benefit from (restaurant reviews, event information, etc.), give your mobile readers the details they're searching for.
<b>WRITING TIP</b> - If you've written a long piece, consider tightening it up by cutting out 25 to 50 words. Cut out content that's irrelevant, or acts as a speed bump in your post. Your content should flow from beginning to end, without any bumps or potholes that'll bounce your readers off the site.
<b>WRITING TIP</b> - The key to a successful blog or online community is user engagement, and the easiest way to encourage interaction is by encouraging readers to share their thoughts in the comments section at the end of your post. 
<b>WRITING TIP</b> - Get to the point: Web readers don't have the time or patience to read eight paragraphs before they get to the summary of the Article they're reading. When writing for the web, you have to learn how to be brief, to the point, and get your keywords in the right places.
<b>WRITING TIP</b> - Show me, don't tell me: Show the reader something they didn't already know. Don't write an Article noting readers need to optimize their site for search. Go into the details of search engine optimization and show them how they can actually improve their SEO.
<b>WRITING TIP</b> - Encourage interaction: Take advantage of the reader's willingness to comment, particularly on blogs and community sites. Engage the community, ask questions and respond to comments to further encourage that interaction with your readers.
<b>WRITING TIP</b> - Find your voice: While being clear and concise on the web is preferred, don't be afraid to be creative, add some personality and flavor to your posts. Going back to bullet No. 1, people don't have time to read everything on the Web, but when they do decide to read your story, try entertaining them a little in the process.
<b>WRITING TIP</b> - Pick a unique topic: Do some research before you write your Article and see if someone's already covered that topic. If the subject has already been written about hundreds of times, write about a particular micro-topic within that larger subject, or find another angle such as how that story relates to something that happened previously. Anything to be different, set your post apart, and give it the best chance for success in terms of exposure and traffic.
<b>WRITING TIP</b> - Know your audience: If you're writing for a sports audience, don't start writing about business, or politics, unless it relates to sports fans. Cater to that audience. And be unique when you do it. That's the best way to set yourself apart.
<b>WRITING TIP</b> - Be an Expert: Write about something you know. Readers want to learn or read content from someone who knows what they're talking about. All of us have something we're passionate about, and area of expertise they know almost as well as anyone. Turn that knowledge into a series of great posts, or even a blog that you can continue writing for over and over again. That's the best way to create a following in this day of age on the web.
<b>WRITING TIP</b> - Links: Use links and keyword-heavy anchor text to back up your points, citing sources and tying various posts together (including your own posts if you've written about the subject previously). Link to other bloggers that provide resources that back up your post, and they're likely to link back to you and send additional traffic your way.
<b>WRITING TIP</b> - Break up your text: To keep your posts interesting, break up the text into a top 10 using bullets like I'm doing here, search-engine optimized subheads, images, code, snippets, steps, anything to break up the copy and give your post added dimension.
<b>WRITING TIP</b> - What's new: Writing about fresh, timely and trending topics are a good way to draw instant attention, particularly on the web where news is always breaking. And when you're writing about that timely content, be sure to share it with friends via Twitter, Facebook, Digg ... or if you're not into those traditional social media sites, try more niche sites such as www.ballhyped.com for sports blogs or Dzone.com for tech articles.
<b>WRITING TIP</b> - Get a good keyword phrase in the title of your post, URL and image details ... How many words should the phrase be? According to OneStat.com, search-engine users use ... 2 words 32% of the time, while 3 words are used 25%, 1 word 19%, 4 words 13%, 5 words 5% and 6 words 2% of the time.
";

	// Here we split it into lines
	$tips = explode("\n", $tips);

	// And then randomly choose a line
	return wptexturize( $tips[ mt_rand(0, count($tips) - 1) ] );
}

// This just echoes the chosen line, we'll position it later
function hello_writing() {
	$chosen = hello_writing_get_tip();
	echo "<p id='writing'>$chosen</p>";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'hello_writing');

// We need some CSS to position the paragraph
function writing_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#writing {
		padding: 5px;
		margin: 10px 24px 0 0;
		border: 1px solid #DEDEDE;
		clear: both;
		font-size: 12px;
		border-radius: 3px;
		padding: 5px;
		overflow: hidden;
	}
	</style>
	";
}

add_action( 'admin_head', 'writing_css' );

?>
