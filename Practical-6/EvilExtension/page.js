const MATCH_LIST = {
  'there': 'their',
  'their': 'there',
  'they\'re': 'there',
  'There': 'Their',
  'Their': 'There',
  'They\'re': 'There',
  'THERE': 'THEIR',
  'THEIR': 'THERE',
  'THEY\'RE': 'THERE'
};

function transformTextNodes(node) {
  if (node.nodeType == Node.TEXT_NODE) {
    const words =  node.textContent.split(" ");
    for (let i = 0; i < words.length; i++) {
      if (MATCH_LIST.hasOwnProperty(words[i].trim())) {
        words[i] = words[i].replace(words[i].trim(), MATCH_LIST[words[i].trim()]);
      }
    }
    node.textContent = words.join(" ");
  }
  for (const child of node.childNodes) {
    transformTextNodes(child);
  }
}

transformTextNodes(document.body);

// Log statement to test that the extension loaded properly.
console.log('Evil extension loaded!');