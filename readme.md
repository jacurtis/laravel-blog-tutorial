# How To Build a (Basic) Blog with Laravel

#### A YouTube Series by DevMarketer

---

Full Playlist for the "How to Build a Blog with Laravel" Series: [Watch FREE on YouTube](https://www.youtube.com/playlist?list=PLwAKR305CRO-Q90J---jXVzbOd4CDRbVx)


Laravel is one of the fastest growing and most popular frameworks on the internet right now. In this series we not only explore what makes Laravel great, but learn concepts of CRUD (Create, Read, Update, Delete), MVC (Model, View, Controller), and other web technologies to create a blog application built on top of Laravel.

This series is almost 50 parts in length and spans almost 20 hours of learning. All of it is provided free of charge in the hope of helping new web developers grow and learn from this oppourtunity. 

This project is sponsored and opperated by DevMarketer.io who's goal is to provide educational materials to help people *Build and Grow Their Next Great Idea*. Not only do you need to understand how to build great software applications, but you must also learn business and marketing concepts in order to turn a great idea into a great business.

## Subscribe and Follow

Be sure to follow along with all our videos on the [YouTube DevMarketer Channel](https://www.youtube.com/channel/UC6kwT7-jjZHHF1s7vCfg2CA?sub_confirmation=1)

You can also get the most of our community by joining us on our hub at [DevMarketer.io](http://DevMarketer.io) which includes:

- Forums
- Blog
- Free eBooks
- Other content

## Known Bugs

This is a long series teaching how to buid a blog system. Everything is caught on video which greatly slows down the development process. Also with so many skills needing to be taught in such a short period of time, many bugs will naturally arise as they do in any development project. What makes things tricky is that after a video goes live, it is difficult to highlight and impliment bug fixes. Source code needs to stay in sync with the videos, many of which do not highlight these bugs fixes.

The solution is to create a bug log of known bugs and known resolutions that can be fixed at a later time.

- **Part 24:** On line 3 of our `resources/views/blog/single.blade.php` file we call `$post->title` without escaping the data (or sanitizing it prior to saving in the DB). **This makes the application vulnerable to XSS.**
	
	- Solution: the `$post->title` should be wrapped in `htmlspecialchars()` like this: `htmlspecialchars($post->title)`. [View the issue on GitHub](https://github.com/jacurtis/laravel-blog-tutorial/issues/1).


- **Part 38:** When a user leaves the tag multi-select box empty upon creating a new tag, an error occurs because we do not check if the tag field is empty like we do when updating a tag.

	- Solution: Add an `if` statement to check if the tag field has anything in it, if it does, then sync, otherwise do nothing.


## Feedback

Thank you for all the great feedback so far. If you have further questions you can either create an issue on the item here on github that we can discuss via comments, or you can reach out to me on either Twitter or Email.

Twitter: [Twitter @_jacurtis](http://twitter.com/_jacurtis) (Be sure to follow me too)

Email: hello@devmarketer.io

## Hire Me

I personally provide consulting services for **project management** and **marketing**.

My 10 years of experience running fast growth companies can benefit any company looking to grow quickly and efficiently. I focus not only on growth but also on setting up pro-active systems to ensure that growth can be maintained. Many companies have suffered under large growth scales, but with the right systems in place we can grow without compromising company quality.

If you are looking to start a web development project I am happy to work with you as a contract project manager. I am very skilled in working directly with executive teams to understand vision and to pass that onto development teams to maximize business ROI and efficiency.

For all requests or quotes on Marketing or Project Management consulting, please email me at business@jacurtis.com



### License

This project and the underlying Laravel framework are open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)