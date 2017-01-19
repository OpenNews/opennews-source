# Source

* [Articles](#)
* [Guides](#)
* [Community](#)
* [Jobs](#)

[Search](#)

---

Project

# From the BBC News Labs: Datastringer
## Basile Simon walks through a project sparked at Hacks/Hackers London

By [Basile Simon](#), [Tiff Fehr](#), [Erin Kissane](#), and [Alyson Hurt](#)

Posted on: 20 September 2015

![](/tmpl/img/fpo-article-lead.jpg)

Our printed ballot guide for voters to take to the polls—a product of the testing described in this article.

Journalists always relied on sources to do their job. Sources very often provide journalists with stories, as well as quotes and interviews. Big agencies like [Reuters](#) and [AP](#) do that too: they are fed wire reports from local journalists on the ground, everywhere on the globe. These people are called stringers.

Picture yourself as a local journalist. You love local police stories, there’s always something to write about, and your audience cares a lot about them. You get these stories by calling your sources in the force in the morning, and by receiving press releases every once in a while. How fantastic would it be if you could have a little piece of software you could tell what you’re looking for, then let it do the leg-work and alert you when it finds something worth your attention?

That’s what [Datastringer](#) aims to do. It was built to be as simple as possible, and very much journalism-oriented. The idea is not new in itself, it’s basically a monitoring tool. However, Datastringer wants to:

* Simplify the process of monitoring streaming pure-data sources,
* Give you the freedom to use all of JavaScript and Node’s power to mash up several datasets at once,
* Provide a ready-to-use environment to help you define your alert parameters, as well as encourage you to perform basic data-analysis operations on the monitored datasets before setting the alerts.

As always, I will try my best not to fall into PR, and instead, to offer my personal view on Datastringer’s creation process, as well as what we learnt by doing it. Do head to the repo and wiki for examples, snippets, and more code-related stuff.

## From Idea to Hacking

As always, I will try my best not to fall into PR, and instead, to offer my personal view on Datastringer’s creation process, as well as what we learnt by doing it. Do head to the repo and wiki for examples, snippets, and more code-related stuff.

About the way it works, you’ve got to think of it this way: `datastringer.js` is a sort of black box which uses user-input values, parameters, and functions, stored in `use_cases.json`. Let’s have a look at this file’s structure:

```
javascript
    [{
      "stringer": "local-police-stringer.js",
      "parameters": ["metropolitan", "00AGGU"]
    }, {
      "stringer": "crime-stringer.js",
      "parameters": ["51.52863195218981", "-0.12342453002929688", "6", "10"]
    }]
```

The day before August 16, e.g. one day before the Knight-Mozilla Fellowship deadline, and three days before our presentation to the News Labs, Clément came to London for a final sprint. We worked all day on the project and on our caffeine-per-gram-of-blood level. Until this key moment when, while writing the documentation, I asked Clément for help.

![](/tmpl/img/fpo-article-inset.jpg)

Clément drawing explanations on the windows.

“Can you explain to me how the interaction between sources and outputs (the program’s core) works? I’m not sure to get it,” I said.
“Sure, that’s easy, look.” Clément started drawing on the large windows, explaining out loud the inner interactions.
When he was finished, I was panicking. “I don’t understand anymore.”

What followed was a long discussion during which he tried to explain this stuff to me, and during which I felt more and more uncomfortable. What was an output really doing? Why couldn’t we unite them in a single file? If I can’t understand it, how can I expect my fellow journos to use it and make it their own?

## Future: Testing and Improvements

The project is still in its early stages. I very much intend to improve it, and I am amazed by the reaction it received, both on Hacker News and on GitHub. People are offering help and expressing interest, and that’s really heart-warming.

However, managing all these individual efforts will require time and a long-term-ish vision of Datastringer. A road-map needs to be drafted to remind everyone at every stage of the philosophy we should abide by, and to give as much visibility as we can to people interested in adopting the product.

![](/tmpl/img/fpo-article-full.jpg)

Our printed ballot guide for voters to take to the polls—a product of the testing described in this article.

Another comment we received during launch was striking: even though the project aims to be as simple to use as possible and even announces that “it’s fine” if you don’t know how to code, the installation process takes place on GitHub, and involve cloning a repo and running npm. That appeared common sense and second nature to me, but… it’s not. How many journos have git installed on their machine and use the command line? I would guess not that many.

We lost track of our audience here, and that definitely will be in our roadmap as something we need to improve. A graphical interface or a service are possibilities we will be exploring.

My main focus for the weeks to come will be to field-test the project and to make the software more accessible for the audience. I am very much looking forward to our 1.0 release, that I will consider ready when anyone can install Datastringer on his machine and get up and running without coding.

## Credits

### ![](/tmpl/img/avatar.jpg) [Basile Simon](#)

Hacker-journalist @BBC_News_Labs. Data-journalist @airwars_. #ddj, linked-data, infosec, drones with @TBIJ, stuff PGP: http://t.co/P1GYMem22Y

* [BBC News](#)
* [@basilesimon](#)
* [Visit website](#)

### ![](/tmpl/img/avatar.jpg) [Tiff Fehr](#)

The Inimitable Tiff ☔ Asst. editor, @nytinteractive/@nytimes. Seattle-raised. Owner of a Dragon & a Behemoth (cats). Prolly following you via matryoshka Lists.

* [The New York Times](#)
* [@tiffehr](#)
* [Visit website](#)

## Comments

{ comments }

## Recently

* ![](/tmpl/img/fpo-article-teaser.jpg) How NPR Fact-Checks The Debate, Live
* ![](/tmpl/img/fpo-article-teaser.jpg) Event Round-Up, Oct 17
* ![](/tmpl/img/fpo-article-teaser.jpg) What I Learned from Researching Newsroom On-boarding and Off-Boarding Processes

---

## Source

Source is an OpenNews project designed to amplify the impact of journalism code and the community of developers, designers, journalists, and editors who make it.

Learn more [about the project](#) or [contribute your work](#). [Contact us](#).

[CC Attribution 3.0](https://creativecommons.org/licenses/by/3.0/)

## OpenNews

A multi-year partnership between Mozilla and the Knight Foundation, Knight-Mozilla OpenNews is dedicated to creating an ecosystem to help strengthen and build community around journalism on the web. More at [opennews.org](https://opennews.org).