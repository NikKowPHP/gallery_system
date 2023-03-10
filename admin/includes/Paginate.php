<?php

class Paginate
{
	public int $current_page;
	public int $items_per_page;
	public int $items_total_count;

	public function __construct(int $page = 1, int $items_per_page = 3, int $items_total_count = 0)
	{
		$this->current_page = $page;
		$this->items_total_count = $items_total_count;
		$this->items_per_page = $items_per_page;
	}

	public function next()
	{
		return $this->current_page + 1;
	}
	public function previous():int
	{
			return $this->current_page - 1;
	}
	public function page_total():int
	{
		return ceil($this->items_total_count / $this->items_per_page);
	}
	public function has_next():bool
	{
		return $this->next() <= $this->page_total();
	}
	public function has_previous():bool
	{
		return ($this->current_page > 1);
	}
	public function offset()
	{
		return ($this->current_page - 1) * $this->items_per_page;
	}

}

