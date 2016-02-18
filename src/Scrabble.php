<?php
	 class Scrabble
		{
			private $word;
			private $point_1 = ['A', 'E', 'I', 'O', 'U', 'L', 'N,','R', 'S', 'T'];
			private $point_2 = ['D', 'G'];
			private $point_3 = ['B', 'C', 'M', 'P'];
			private $point_4 = ['F', 'H', 'V', 'W', 'Y'];
			private $point_5 = ['K'];
			private $point_8 = ['J', 'X'];
			private $point_10 = ['Q', 'Z'];


			function __construct($newWord)
			{
				$this->word = $newWord;
			}


			function getWord()
			{
				return $this->word;
			}

			function setWord($word)
			{
				$this->word = $word;
			}

			function getScore()
			{
				$score = 0;
				$letters = str_split(strtoupper($this->word));
				foreach($letters as $letter) {
					if (array_search($letter, $this->point_1) !== FALSE){
						$score += 1;
					} elseif (array_search($letter, $this->point_2) !== FALSE){
						$score += 2;
					} elseif (array_search($letter, $this->point_3) !== FALSE){
						$score += 3;
					} elseif (array_search($letter, $this->point_4) !== FALSE){
						$score += 4;
					} elseif (array_search($letter, $this->point_5) !== FALSE){
						$score += 5;
					} elseif (array_search($letter, $this->point_8) !== FALSE){
						$score += 8;
					} elseif (array_search($letter, $this->point_10) !== FALSE){
						$score += 10;
					}

				} return $score;

			}

	}
 ?>
