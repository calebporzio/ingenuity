<!DOCTYPE html>
<html>
<head>
<script src="/js/lodash.min.js"></script>
<script src="/js/vue.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
  <style>
    .board {
  margin: 20px auto 0 auto;
  width: 80%;
  height: 80vw;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}

.square {
  height: 28%;
  width: 28%;
  background: #ccc;
  margin: 2.6%;
}

.square.highlighted {
  background: red;
}

button {
  margin-top: 15px;
  font-size: 1.7em;
}
  </style>
</head>
<body>
  
  <div style="text-align: center" v-if="store.state.first_win"> 
    <span>2-4-5-6-7-8-9 &nbsp Reset</span><br>
    <span>5-8 &nbsp Reset</span><br>
    <span>1-2-3-5-6 &nbsp Reset</span><br>
    <span>1-4-5-7 &nbsp Reset</span><br>
    <span>2-3-4-5-6-8 &nbsp Reset</span><br>
    <span>1-3-8 &nbsp Reset</span><br>
    <span>3-4-9 &nbsp Reset</span><br>
    <span>2-3-4-5-8-9 &nbsp Reset</span><br>
    <span>5-8 &nbsp Reset</span>
  </div>
  
  <board inline-template>
    <div style="text-align: center">
      <div class="board">
        <square :value="square.value" v-for="square in squares" inline-template>
          <div class="square" :class="highlighted ? 'highlighted' : ''" @click="highlight"></div>
        </square>
      </div>
      <button @click="reset">Reset</button>
    </div>
  </board>

<script>
  var store = {
    state: {
      first_win: false,
      second_win: false,
      highlighted: []
    },
    
    highlight: function(value) {
      switch (value) {
        case 1:
          this.toggle([1, 2, 4, 5]);
          break;
        case 2:
          this.toggle([1, 2, 3]);
          break;
        case 3:
          this.toggle([2, 3, 5, 6]);
          break;
        case 4:
          this.toggle([1, 4, 7]);
          break;
        case 5:
          this.toggle([1, 3, 5, 7, 9]);
          break;
        case 6:
          this.toggle([3, 6, 9]);
          break;
        case 7:
          this.toggle([4, 5, 7, 8]);
          break;
        case 8:
          this.toggle([7, 8, 9]);
          break;
        case 9:
          this.toggle([5, 6, 8, 9]);
          break;
      }
      
      if (this.state.highlighted.length == 9) {
        var self = this;
        setTimeout(function() {
          self.win();
          self.reset();
        }, 1000);
        
      }
    },
    
    toggle: function(values) {
      for(var i=0; i<values.length; i++) {
        if (_.includes(this.state.highlighted, values[i])) {
          this.state.highlighted.$remove(values[i]);
        } else {
          this.state.highlighted.push(values[i]);
        }
      }
    },
    
    reset: function() {
      this.state.highlighted = [];
    },
    
    win: function() {
      if (this.first_win) {
        this.state.second_win = true;
      } else {
        this.state.first_win = true;
      }
    }
  };

  Vue.component('square', {
    data: function() {
      return {
        store: store
      };
    },
    
    props: ['value'],
    
    computed: {
      highlighted: function() {
        return _.includes(this.store.state.highlighted, this.value);
      }
    },
    
    methods: {
      highlight: function() {
        this.store.highlight(this.value);
      }
    }
  });

  Vue.component('board', {
    data: function() {
      return {
        store: store
      };
    },
    
    computed: {
      squares: function() {
        var squares = [];
        for (var i=1; i<10; i++) {
          squares.push({value: i});
        }
        return squares;
      }
    },
    
    methods: {
      reset: function() {
        this.store.reset();
      }
    }
  });

  vm = new Vue({
    el: 'body',
    
    data: {
      store: store
    }
  });
</script>
  
</body>
</html>