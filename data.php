<?php

declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and authors.

$data = [
	'authors' =>
	[
		['id' => 1, 'name' => 'Hodor'],
		['id' => 2, 'name' => 'Bruce Wayne'],
		['id' => 3, 'name' => 'Rick Sanchez'],
		['id' => 4, 'name' => 'Bane'],
		['id' => 5, 'name' => 'Emmett Lathrop "Doc" Brown'],

	],

	'articles' => [

		[
			'title' => 'Hodor',
			'content' => 'Hodor!? hodor hodor hodor hodor hodor hodor hodor hodor hodor hodorhodor hodor hodor hodor hodor!
			hodor hodor hodor hodor hodor hodor, hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor.
			hodor hodor hodor hodor hodor hodor hodor hodor? hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor
			hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor, hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor
			HODOR!',
			'publishedDate' => date('Y'),
			'likeCounter' => 1000000,
			'author' => 1,
			'backgroundColor' => '188, 186, 184, 1',
			'image' => 'assets/images/hodor.png'
		],

		[
			'title' => 'Hodor!',
			'content' => 'Hodor! hodor hodor hodor hodor hodor hodor hodor hodor hodor, hodorhodor hodor hodor hodor hodor...
			hodor hodor hodor hodor hodor hodor hodor. hodor hodor. hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor
			hodor hodor hodor hodor, hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor.
			hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor hodor,
			Hodor?',
			'publishedDate' => date('Y'),
			'likeCounter' => 500000,
			'author' => 1,
			'backgroundColor' => '146, 154, 171, 1',
			'image' => 'assets/images/hodor.png'
		],

		[
			'title' => 'My Story',
			'content' => "The first time I stole so that I wouldn't starve, yes. I lost many assumptions about the simple nature
			of right and wrong. And when I traveled I learned the fear before a crime and the thrill of success. But I never became
			one of them.",
			'publishedDate' => date('Y'),
			'likeCounter' => 5,
			'author' => 2,
			'backgroundColor' => '188, 186, 184, 1',
			'image' => 'assets/images/bruce.png'
		],

		[
			'title' => 'I AM BATMAN!',
			'content' => "The first time I stole so that I wouldn't starve, yes. I lost many assumptions about the simple nature of right and wrong.
			And when I traveled I learned the fear before a crime and the thrill of success. But I never became one of them.
			Hero can be anyone. Even a man knowing something as simple and reassuring as putting a coat around a young boy shoulders to let him know the world hadn't ended.
			Accomplice? I'm gonna tell them the whole thing was your idea.",
			'publishedDate' => date('Y'),
			'likeCounter' => 1002,
			'author' => 2,
			'backgroundColor' => '146, 154, 171, 1',
			'image' => 'assets/images/bruce.png'
		],

		[
			'title' => 'A price for everything.',
			'content' => "A price for everything. It's a figure of speech, Morty! They're bureaucrats! I don't respect them.
			Just keep shooting, Morty! You have no idea what prison is like here! What about the reality where Hitler cured cancer,
			Morty? The answer is: Don't think about it. I wish that shotgun was my penis.",
			'publishedDate' => date('Y'),
			'likeCounter' => 20,
			'author' => 3,
			'backgroundColor' => '188, 186, 184, 1',
			'image' => 'assets/images/rick.png'
		],

		[
			'title' => 'Not today bitch!',
			'content' => "Lookin' good! Where are my testicles, Summer? Oh no. I'm late to class, bitch. It's not like we can do this every week, we get 3 or 4 more of these tops.
			It's called carpe diem Morty. Look it up. You're not gonna believe this, because it usually never happens, but I made a mistake. What is this, 90's Conan?
			Nice, Mrs Pancakes. Real nice. Wubba lubba dub dub! Because I don't respect therapy; because I'm a scientist; because I invent, transform, create, and destroy for a living,
			and when I don't like something about the world, I change it. And I don't think going to a rented office in a strip mall to listen to some agent of averageness explain which
			words mean which feelings has ever helped anyone do anything. I think it's helped a lot of people get comfortable and stop panicking, which is a state of mind we value in the animals we eat,
			but not something I want for myself. I'm not a cow, I'm a pickle... when I feel like it.",
			'publishedDate' => date('Y'),
			'likeCounter' => 30000,
			'author' => 3,
			'backgroundColor' => '146, 154, 171, 1',
			'image' => 'assets/images/rick.png'
		],

		[
			'title' => 'How I became Bane!',
			'content' => "So you came back to die with your city!
			I'm Gotham's reckoning. It'll end the ball of damns you've all been living on. A necessary evil.
			It will be extremely painful... for you
			Every man who has lotted here over the centuries, has looked up to the light and imagined climbing to freedom. So easy, so simple!
			And like shipwrecked men turning to seawater foregoing uncontrollable thirst, many have died trying. And then here there can be no
			true despair without hope. So as I terrorize Gotham, I will feed its people hope to poison their souls. I will let them believe that
			they can survive so that you can watch them climbing over each other to stay in the sun. You can watch me torture an entire city.
			And then when you've truly understood the depth of your failure, we will fulfill Ra's Al Ghul's destiny. We will destroy Gotham. And then,
			when that is done, and Gotham is... ashes Then you have my permission to die.
			Peace has cost you your strength. Victory has defeated you.
			I am the League of Shadows.
			Citizens, take control. Take control of your city!
			Your Punishment Must Be More Severe.
			It doesn't matter who we are. What matters is our plan.
			Behind you, stands a symbol of oppression. Blackgate Prison, where a thousand men have languished under the name of this man: Harvey Dent.
			Ah yes! I was wondering what would weight first. Your spirit... or your body?
			Do you feel in charge?
			You fight like a younger man, there's nothing held back. It's admirable, but mistaken.
			Speak of the devil, and he shall appear.",
			'publishedDate' => date('Y'),
			'likeCounter' => 37,
			'author' => 4,
			'backgroundColor' => '188, 186, 184, 1',
			'image' => 'assets/images/bane.png'
		],

		[
			'title' => 'Never Give Up!',
			'content' => "Every man who has lotted here over the centuries, has looked up to the light and imagined climbing to freedom.
			So easy, so simple! And like shipwrecked men turning to seawater foregoing uncontrollable thirst, many have died trying.
			And then here there can be no true despair without hope. So as I terrorize Gotham, I will feed its people hope to poison their souls.
			I will let them believe that they can survive so that you can watch them climbing over each other to stay in the sun. You can watch me torture an entire city.
			And then when you've truly understood the depth of your failure, we will fulfill Ra's Al Ghul's destiny. We will destroy Gotham. And then, when that is done, and Gotham is...
			ashes Then you have my permission to die.",
			'publishedDate' => date('Y'),
			'likeCounter' => 10000,
			'author' => 4,
			'backgroundColor' => '146, 154, 171, 1',
			'image' => 'assets/images/bane.png'
		],

		[
			'title' => 'I only wanted to find out the truth',
			'content' => "About 30 years, it's a nice round number. C'mon, c'mon let's go. They're late. My experiment worked.
			They're all exactly twenty-five minutes slow. A bolt of lightning, unfortunately, you never know when or where it's ever gonna strike.
			Maybe you were adopted. Time machine, I haven't invented any time machine. What's the meaning of this. Bear with me, Marty, all of your questions will be answered.
			Roll tape, we'll proceed. Now remember, according to my theory you interfered with with your parent's first meeting. They don't meet, they don't fall in love,
			they won't get married and they wont have kids. That's why your older brother's disappeared from that photograph. Your sister will follow and unless you repair the damages,
			you will be next. This is it. This is the answer. It says here that a bolt of lightning is gonna strike the clock tower precisely at 10:04 p.m. next Saturday night.
			If we could somehow harness this bolt of lightning, channel it into the flux capacitor, it just might work. Next Saturday night, we're sending you back to the future.
			No, I refuse to except the responsibility. My god, do you know what this means? It means that this damn thing doesn't work at all. After I fell off my toilet, I drew this.
			Welcome to my latest experiment. It's the one I've been waiting for all my life. Listen, this is very important, I forgot my video camera, could you stop by my place and
			pick it up on your way to the mall?",
			'publishedDate' => date('Y'),
			'likeCounter' => 100,
			'author' => 5,
			'backgroundColor' => '188, 186, 184, 1',
			'image' => 'assets/images/emmet.png'
		],

		[
			'title' => 'The Doc!',
			'content' => "Indeed I will, roll em. I, Doctor Emmett Brown, am about to embark on an historic journey. What have I been thinking of, I almost forgot to bring some extra plutonium.
			How did I ever expect to get back, one pallet one trip I must be out of my mind. What is it Einy? Oh my god, they found me, I don't know how but they found me. Run for it, Marty.
			About 30 years, it's a nice round number. I need fuel. Go ahead, quick, get in the car. It's information about the future isn't it. I warned you about this kid. The consequences could be disastrous.
			The way I see it, if you're gonna build a time machine into a car why not do it with some style. Besides, the stainless, steel construction made the flux dispersal- look out.
			Why that's me, look at me, I'm an old man. Thank god I found you. Listen, can you meet me at Twin Pines Mall tonight at 1:15? I've made a major breakthrough, I'll need your assistance.
			Look, there's a rhythmic ceremonial ritual coming up. It's cold, damn cold. Ha, ha, ha, Einstein, you little devil. Einstein's clock is exactly one minute behind mine, it's still ticking.
			Don't tell me. Uh, you want me to buy a subscription to the Saturday Evening Post?
			Ahh. So tell me, future boy, who's president of the United States in 1985? I need fuel. Go ahead, quick, get in the car. Maybe you were adopted. You know Marty, I'm gonna be very sad to see you go.
			You've really mad a difference in my life, you've given me something to shoot for. Just knowing, that I'm gonna be around to se 1985, that I'm gonna succeed in this. That I'm gonna have a chance to travel through time.
			It's going to be really hard waiting 30 years before I could talk to you about everything that's happened in the past few days. I'm really gonna miss you, Marty.",
			'publishedDate' => date('Y'),
			'likeCounter' => 20000,
			'author' => 5,
			'backgroundColor' => '146, 154, 171, 1',
			'image' => 'assets/images/emmet.png'
		],
	]
];
