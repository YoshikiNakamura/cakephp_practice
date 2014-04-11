<?php
class ArticlesController extends AppController
{
	/**
	 * models each action needs
	 */
	public $uses = array('Article');

	public function beforeFilter()
	{
		parent::beforeFilter();
		//$this->Auth->allow('index');
		$this->Auth->allow();
	}

	/**
	 * view article list
	 */
	public function index()
	{
		$articles = $this->Article->find('all');
		$this->set('articles', $articles);
	}

	/**
	 * view a article which id is $id
	 */
	public function view($id = null)
	{
		$article = $this->Article->find('first', array('conditions'=>array('Article.id'=>$id)));
		$this->set('article', $article);
	}

	/**
	 * to post new article
	 */
	public function add()
	{
		if($this->request->is('post'))
		{
			$this->Article->create();
			try
			{
				$this->Article->save($this->request->data);
				return $this->redirect(array('action' => 'index'));
			}
			catch(Exception $e)
			{
				$e->getMessage();
			}
		}
	}

	/**
	 * to modify existing article
	 */
	public function edit()
	{
		if($this->request->is('put'))
		{
			try
			{
				$this->Article->save($this->request->data);
				return $this->redirect(array('action' => 'index'));
			}
			catch(Exception $e)
			{
				$e->getMessage();
			}
		}
	}

	/**
	 * to delete existing article
	 */
	public function delete($id = null)
	{
		if($this->request->is('delete'))
		{
			try
			{
				$this->Article->delete($id);
				return $this->redirect(array('action' => 'index'));
			}
			catch(Exception $e)
			{
				$e->getMessage();
			}
		}
	}
}