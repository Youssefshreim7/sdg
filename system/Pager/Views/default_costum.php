<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>

<div class="pagination__area bg__gray--color">
    <nav class="pagination justify-content-center">
        <ul class="pagination__wrapper d-flex align-items-center justify-content-center">
            <?php if ($pager->hasPrevious()) : ?>
                <li class="pagination__list">
                    <a href="<?= $pager->getFirst() ?>" class="pagination__item--arrow link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292"/>
                        </svg>
                        <span class="visually-hidden"><?= lang('Pager.first') ?></span>
                    </a>
                </li>
                <li class="pagination__list">
                    <a href="<?= $pager->getPrevious() ?>" class="pagination__item--arrow link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292"/>
                        </svg>
                        <span class="visually-hidden"><?= lang('Pager.previous') ?></span>
                    </a>
                </li>
            <?php endif ?>

            <?php foreach ($pager->links() as $link) : ?>
                <li class="pagination__list">
                    <?php if ($link['active']) : ?>
                        <span class="pagination__item pagination__item--current"><?= $link['title'] ?></span>
                    <?php else : ?>
                        <a href="<?= $link['uri'] ?>" class="pagination__item link"><?= $link['title'] ?></a>
                    <?php endif ?>
                </li>
            <?php endforeach ?>

            <?php if ($pager->hasNext()) : ?>
                <li class="pagination__list">
                    <a href="<?= $pager->getNext() ?>" class="pagination__item--arrow link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"/>
                        </svg>
                        <span class="visually-hidden"><?= lang('Pager.next') ?></span>
                    </a>
                </li>
                <li class="pagination__list">
                    <a href="<?= $pager->getLast() ?>" class="pagination__item--arrow link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"/>
                        </svg>
                        <span class="visually-hidden"><?= lang('Pager.last') ?></span>
                    </a>
                </li>
            <?php endif ?>
        </ul>
    </nav>
</div>
