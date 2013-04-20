<?php

/*
 * This file is part of the CCDNForum ForumBundle
 *
 * (c) CCDN (c) CodeConsortium <http://www.codeconsortium.com/>
 *
 * Available on github <http://www.github.com/codeconsortium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CCDNForum\ForumBundle\Controller;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use CCDNForum\ForumBundle\Entity\Board;

/**
 *
 * @author Reece Fowell <reece@codeconsortium.com>
 * @version 1.0
 */
class BoardBaseController extends BaseController
{
	/**
	 *
	 * @access public
	 * @param \CCDNForum\ForumBundle\Entity\Board $board
	 * @return bool
	 * @throws \Symfony\Component\Security\Core\Exception\AccessDeniedException
	 */
	public function isAuthorisedToViewBoard(Board $board)
	{
		return $this->isAuthorised($this->getPolicyManager()->isAuthorisedToViewBoard($board));
	}
}