<?php
	class clsBinaryTree {
	
		var $TArray;
		var $numElem;        
		
		var $Elem;
		var $RightPointer;
		var $LeftPointer;
		var $Counter;
		var $SortedArray;
		
		var $SearchTerm;
		var $SearchIndex;
   
		function clsBinaryTree(
		  $ArrayIn,
		  $cntElem = 0) {              
     	  
			$this->TArray = $ArrayIn;
		  
		  	//First Element must start from 1.
		 
			if ($ArrayIn[0] != "") {
				
				for ($i = 1; $i < sizeof($ArrayIn) + 1; $i++) {
					$NewArray[$i] = $ArrayIn[$i - 1];
				}                                 
				
				$this->TArray = $NewArray;
				
			} else {
				
				$this->TArray = $ArrayIn;
				
			}                         
			  
			$this->numElem = $cntElem;     
			
			$this->ConstructBinaryTree();     
			
			$this->GenerateSorted();
			
		}                      
		

		function ConstructBinaryTree() {	
		
			$MAX = $this->numElem;  
	
			for ($i = 1; $i <= $MAX; $i++) {
			
				//global $Elem;
				
				$this->Elem = $i;
				$Root = 1;
				$this->FollowPointer($Root);
				
			}   

		}


		function FollowPointer($Root) {     
		
			if ($this->TArray[$this->Elem] > $this->TArray[$Root]) {
             
				if ($this->RightPointer[$Root] == 0) {
					$this->RightPointer[$Root] = $this->Elem; 
				} else {
					$this->FollowPointer($this->RightPointer[$Root]);
				}
				
			}
			
			if ($this->TArray[$this->Elem] < $this->TArray[$Root]) {
				
				if ($this->LeftPointer[$Root] == 0) {
					$this->LeftPointer[$Root] = $this->Elem;
				} else {
					$this->FollowPointer($this->LeftPointer[$Root]);
				}
				
			}

		} 
		
		
		
		function GenerateSorted() {    
		
			$this->Counter = 0;
			
			$this->InOrder(1);    

		}
		
		
		function InOrder($Root) {
		 
			if (intval($this->LeftPointer[$Root]) != 0) $this->InOrder(intval($this->LeftPointer[$Root]));
			
			$this->Counter += 1;
			$this->SortedArray[$this->Counter] = $this->TArray[$Root];
			
			if (intval($this->RightPointer[$Root]) != 0) $this->InOrder(intval($this->RightPointer[$Root]));

		}
		
		
		function Search($InTerm) {   
		
			$this->SearchTerm = $InTerm;
			
			$this->BTreeSearch(1);
			
			return $this->SearchIndex;
		
		}
   

		function BTreeSearch($Root) {
	
				if ($this->SearchTerm > $this->TArray[$Root]) {
             
					if ($this->RightPointer[$Root] == 0) {
						$this->SearchIndex = 0; 
					} else {
						$this->BTreeSearch($this->RightPointer[$Root]);
					}
				
				}
			
				if ($this->SearchTerm < $this->TArray[$Root]) {
				
					if ($this->LeftPointer[$Root] == 0) {
						$this->SearchIndex = 0; 
					} else {
						$this->BTreeSearch($this->LeftPointer[$Root]);
					}
				
				}
	
				if ($this->SearchTerm == $this->TArray[$Root]) {
			
					$this->SearchIndex = $Root;
				
				}

		}


	}             
	

	$temp[0] = "X";
	$temp[1] = "A";
	$temp[2] = "Zoo";
	$temp[3] = "Programming";
	$temp[4] = "BasicA";

	
	print "<b>Original Array</b><br>";
	
	/*Code to print the Array
	 * TO be remove in actual 
	 */
	print $temp[0] . "<br>";
	print $temp[1] . "<br>";
	print $temp[2] . "<br>";        
	print $temp[3] . "<br>";
	print $temp[4] . "<br><br>";

	$Test = new clsBinaryTree($temp, 5); 
	
	print "<b>Pointers</b><br><b>Left:</b>";
			
	/*Code to print the Left and Right Pointers
	 *TO be remove in actual                   
	 */			
	for ($i = 1; $i <= 5; $i++) {
		print intval($Test->LeftPointer[$i]);
	}
		    
    print "<br><b>Right:</b>";
    
	for ($i = 1; $i <= 5; $i++) {
		print intval($Test->RightPointer[$i]);
	}             
	
	print "<br><br><b>Sorted List.</b><br>";

	
    /* Code to print the Sorted List
	 * TO be remove in actual       
	 */
	for ($i = 1; $i <= 5; $i++) {
		print $Test->SortedArray[$i] . "<br>";   
	}


	print "<br><b>Search 'Zoo':</b> " . $Test->Search("Zoo");
   

?>
