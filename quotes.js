var quotes = [
  "What happens when you touch me there? -- Stuffy",
  "Holy damn slut on tree stumps. -- Burly",
  "There's not enough room to get naked! -- Giorgio",
  "I'm a virgin deer humper. -- Matt",
  "Hey Viking, we're having a baby here! -- Catherine",
  "If I wasn't gay... I mean... CRAP! -- Cowboy",
  "But I <i>am</i> a jedi! -- AP",
  "If you can't pee in the dark, you shouldn't be blind. -- Bill",
  "You can't make motor boat sounds with personality. -- AP",
  "<b>Q:</b> How do you kill a circus? <b>A:</b> Go for the juggler. -- Joey",
  "Take my seed to the surface! -- Viking",
  "No.  Bitchy.  Boning. -- Stuffy",
  "I'm glad my God has a penis.  -- Dave"
];

function update_quote(id) {
  // update id field with a new quote
  var n = Math.round(Math.random()*(quotes.length-1));
  var element = document.getElementById(id);

  element.innerHTML = quotes[n];
}
