// Generated by CoffeeScript 1.4.0
var Hhtml, Node, Ttext, activateKeys, applyHtml, areVisible, createNodeObjects, forward, load, nodes, plotInitial, removeHtml, setupAuntUncle, setupParentSiblingsAndOrder, toggleReversable,
  __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; },
  __hasProp = {}.hasOwnProperty,
  __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

nodes = {};

forward = true;

activateKeys = function(keys) {
  return console.log('activateKeys');
};

toggleReversable = function() {
  var key, value, _results;
  _results = [];
  for (key in nodes) {
    value = nodes[key];
    if (value instanceof Ttext) {
      _results.push(value.setHighlightingAndClick());
    } else {
      _results.push(void 0);
    }
  }
  return _results;
};

areVisible = function(keys) {
  return console.log('areVisible');
};

load = function() {
  return console.log('load');
};

applyHtml = function(keys) {
  return console.log('applyHtml');
};

removeHtml = function(keys) {
  return console.log('removeHtml');
};

createNodeObjects = function() {
  var hHtml, key, tText, value, _results;
  $('#hHtml').remove();
  $('#tText').append('<span id="hHtml"></span>');
  $('#hHtml').hide();
  _results = [];
  for (key in docText) {
    value = docText[key];
    if (value.hHtml != null) {
      $('#hHtml').empty();
      $('#hHtml').append(value.content);
      $('#hHtml').find('*').addClass(key);
      hHtml = new Hhtml(key, $('#hHtml').html());
      hHtml.filterChildren(value.children);
      nodes[key] = hHtml;
    } else {
      tText = new Ttext(key, value.content, value.children, value.starter);
      nodes[key] = tText;
    }
    _results.push($('#hHtml').empty());
  }
  return _results;
};

setupParentSiblingsAndOrder = function() {
  var child, children, key, node, position, value, _i, _len, _results;
  _results = [];
  for (key in nodes) {
    value = nodes[key];
    if (value instanceof Ttext) {
      children = value.children;
      value.setOrder();
      value.setKeyNamePrevious();
      value.setKeyNameFollowing();
      for (_i = 0, _len = children.length; _i < _len; _i++) {
        child = children[_i];
        if (nodes[child] != null) {
          node = nodes[child];
          node.parent = key;
          node.siblings = children.slice();
          position = $.inArray(node.name, node.siblings);
          node.siblings.splice(position, 1);
          // console.log('node: ');
          // console.log(node);
        }
      }
      if (!(value.parent != null)) {
        _results.push(value.siblings = []);
      } else {
        _results.push(void 0);
      }
    } else {
      _results.push(void 0);
    }
  }
  return _results;
};

setupAuntUncle = function() {
  var key, value, _results;
  _results = [];
  for (key in nodes) {
    value = nodes[key];
    if (value instanceof Ttext) {
      _results.push(value.setAuntUncle());
    } else {
      _results.push(void 0);
    }
  }
  return _results;
};

plotInitial = function() {
  var name, value, _i, _len, _results;
  _results = [];
  for (_i = 0, _len = docOrder.length; _i < _len; _i++) {
    name = docOrder[_i];
    value = nodes[name];
    if (value instanceof Ttext) {
      $('#tText').append('<span id = \"' + value.name + '\">' + value.content + ' <span>');
      value.setJQSelector();
      value.setClick();
      if (!value.starter) {
        _results.push($(value.jqSelector).hide());
      } else {
        _results.push(void 0);
      }
    } else {
      _results.push(value.setJQSelector());
    }
  }
  return _results;
};

Node = (function() {

  function Node(name, content, children) {
    this.name = name;
    this.content = content;
    this.children = children;
    this.parent = null;
    this.siblings = null;
    this.html = null;
    this.jqSelector = null;
  }

  Node.prototype.activate = function() {
    return console.log('activated');
  };

  return Node;

})();

Ttext = (function(_super) {

  __extends(Ttext, _super);

  function Ttext(name, content, children, starter) {
    this.starter = starter;
    this.activate = __bind(this.activate, this);

    Ttext.__super__.constructor.call(this, name, content, children);
  }

  Ttext.order;

  Ttext.auntUncle;

  Ttext.ancestors;

  Ttext.keyNamePrevious;

  Ttext.keyNameFollowing;

  Ttext.prototype.setAuntUncle = function() {
    if (this.parent != null) {
      return this.auntUncle = nodes[this.parent].siblings;
    } else if (!this.starter) {
      console.log(this.name);
      return console.log('key parent has not been determined. Run the setParentsSiblingsAndOrder method in main.');
    }
  };

  Ttext.prototype.setOrder = function() {
    return this.order = $.inArray(this.name, docOrder);
  };

  Ttext.prototype.setKeyNamePrevious = function() {
    if (!(typeof order !== "undefined" && order !== null)) {
      this.setOrder();
    }
    return this.keyNamePrevious = docOrder[this.order - 1];
  };

  Ttext.prototype.setKeyNameFollowing = function() {
    if (!(typeof order !== "undefined" && order !== null)) {
      this.setOrder();
    }
    return this.keyNameFollowing = docOrder[this.order + 1];
  };

  Ttext.prototype.setAncestors = function() {
    return console.log('setAncestors');
  };

  Ttext.prototype.setJQSelector = function() {
    return this.jqSelector = '#' + this.name;
  };

  Ttext.prototype.setClick = function() {
    if (forward && this.children.length > 0) {
      $(this.jqSelector).click(this.activate);
      return $(this.jqSelector).addClass('clickable');
    }
  };

  Ttext.prototype.expand = function() {
    return $(this.jqSelector).fadeIn(200);
  };

  Ttext.prototype.contract = function() {
    var node, value, _i, _len, _ref;
    $(this.jqSelector).fadeOut(100);
    _ref = this.children;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      value = _ref[_i];
      if (nodes[value] != null) {
        node = nodes[value];
      } else {
        // console.log('requested value, ' + value + ', is not a node.');
        return;
      }
      nodes[value].activate();
    }
  };

  Ttext.prototype.backup = function() {
    if (this.parent != null) {
      nodes[this.parent].activate();
    }
    return this.contract();
  };

  Ttext.prototype.setHighlightingAndClick = function() {
    var reversable, sibVisibility, sibling, siblingSelector, _i, _len, _ref;
    $(this.jqSelector).removeClass('reversable');
    $(this.jqSelector).removeClass('clickable');
    $(this.jqSelector).unbind('click');
    if (forward && this.children.length > 0) {
      $(this.jqSelector).addClass('clickable');
      return $(this.jqSelector).click(this.activate);
    } else if (!forward) {
      reversable = false;
      if (this.siblings.length === 0) {
        if (this.parent != null) {
          reversable = true;
        }
      } else if (this.parent != null) {
        sibVisibility = true;
        _ref = this.siblings;
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
          sibling = _ref[_i];
          siblingSelector = nodes[sibling].jqSelector;
          if (!$(siblingSelector).is(':visible') && nodes[sibling] instanceof Ttext) {
            sibVisibility = false;
            break;
          }
        }
      }
      if (sibVisibility) {
        reversable = true;
      }
      // console.log('Node ' + this.name + ' is reversable: ' + reversable);
      if (reversable) {
        ($(this.jqSelector)).addClass('reversable');
        return $(this.jqSelector).click(this.activate);
      }
    }
  };

  Ttext.prototype.activate = function(recursionSafetyDevice) {
    // console.log('you activated node ' + this.name);
    if (forward) {
      return this.forward();
    } else if (!forward) {
      return this.backward(recursionSafetyDevice);
    }
  };

  Ttext.prototype.forward = function() {
    var node, value, _i, _len, _ref;
    if (($(this.jqSelector)).is(':visible')) {
      $(this.jqSelector).fadeOut(100);
      _ref = this.children;
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        value = _ref[_i];
        if (nodes[value] != null) {
          node = nodes[value];
        } else {
          // console.log('requested value, ' + value + ', is not a node.');
          return;
        }
        nodes[value].activate();
      }
    } else {
      $(this.jqSelector).fadeIn(200);
      return this.setHighlightingAndClick();
    }
  };

  Ttext.prototype.backward = function(recursionSafetyDevice) {
    var node, sibling, _i, _j, _len, _len1, _ref, _ref1, _results, _results1;
    if (($(this.jqSelector)).is(':visible')) {
      $(this.jqSelector).fadeOut(100);
      this.setHighlightingAndClick();
      if (!(recursionSafetyDevice === true)) {
        if (this.parent != null) {
          nodes[this.parent].activate();
        }
        _ref = this.siblings;
        _results = [];
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
          sibling = _ref[_i];
          _results.push(nodes[sibling].activate(true));
        }
        return _results;
      }
    } else {
      $(this.jqSelector).fadeIn(200);
      this.setHighlightingAndClick();
      _ref1 = this.siblings;
      _results1 = [];
      for (_j = 0, _len1 = _ref1.length; _j < _len1; _j++) {
        sibling = _ref1[_j];
        node = nodes[sibling];
        if (node instanceof Ttext) {
          _results1.push(nodes[sibling].setHighlightingAndClick());
        } else {
          _results1.push(void 0);
        }
      }
      return _results1;
    }
  };

  return Ttext;

})(Node);

Hhtml = (function(_super) {
  var childSelectors, posted;

  __extends(Hhtml, _super);

  function Hhtml(name, content) {
    this.activate = __bind(this.activate, this);
    Hhtml.__super__.constructor.call(this, name, content);
  }

  childSelectors = null;

  posted = false;

  Hhtml.prototype.setContent = function(ufo) {
    $('#hHtml').remove();
    $('#tText').append('<span id="hHtml"></span>');
    $('#hHtml').hide();
    $('#hHtml').append(ufo);
    $('#hHtml').find('*').addClass(this.name);
    this.content = $('#hHtml').html();
    return $('#hHtml').remove();
  };

  Hhtml.prototype.setJQSelector = function() {
    return this.jqSelector = '.' + this.name;
  };

  Hhtml.prototype.filterChildren = function(given) {
    var child, filteredChildren, item, set, _i, _j, _k, _len, _len1, _len2, _ref, _results;
    filteredChildren = [];
    for (_i = 0, _len = given.length; _i < _len; _i++) {
      child = given[_i];
      filteredChildren.push([$.inArray(child, docOrder), child]);
    }
    filteredChildren.sort(function(a, b) {
      return a[0] - b[0];
    });
    for (i = 0; i < filteredChildren.length; i++){
            child = filteredChildren[i]
            future = filteredChildren[i+1]

            if(future != null && Math.abs(future[0] - child[0])==1){
                child.splice(0,1)
                future = future.concat(child)
                filteredChildren.splice(i,2,future)
                i--
            }
        };

    for (_j = 0, _len1 = filteredChildren.length; _j < _len1; _j++) {
      item = filteredChildren[_j];
      item.splice(0, 1);
    }
    this.children = filteredChildren;
    this.childSelectors = [];
    _ref = this.children;
    _results = [];
    for (_k = 0, _len2 = _ref.length; _k < _len2; _k++) {
      set = _ref[_k];
      _results.push(this.childSelectors.push('#' + set.join(', #')));
    }
    return _results;
  };

  Hhtml.prototype.contract = function() {
    var layers, selector, _i, _len, _ref;
    console.log('contracted');
    if (!forward) {
      layers = $('.' + this.name).size() / this.children.length;
      console.log(layers);
      _ref = this.childSelectors;
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        selector = _ref[_i];
         for(i = 0; i< layers; i++){
                    $(selector).unwrap()
                    };

        // console.log('coffeescript bug catcher');
      }
    }
    return this.posted = false;
  };

  Hhtml.prototype.expand = function() {
    var selector, _i, _len, _ref, _results;
    console.log('expanded');
    _ref = this.childSelectors;
    _results = [];
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      selector = _ref[_i];
      $(selector).wrapAll(this.content);
      _results.push(this.posted = true);
    }
    return _results;
  };

  Hhtml.prototype.activate = function() {
    if (this.posted === true) {
      return this.contract();
    } else {
      return this.expand();
    }
  };

  return Hhtml;

})(Node);

$(document).ready(function() {
  createNodeObjects();
  setupParentSiblingsAndOrder();
  setupAuntUncle();
  return plotInitial();
});

$(document).keydown(function(key) {
  if (key.altKey) {
    forward = !forward;
    toggleReversable();
    return console.log('forward is ' + forward);
  }
});
