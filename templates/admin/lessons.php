<?php
/**
 * @author: MUlt1mate
 * Date: 31.03.13
 * Time: 11:35
 *
 * @var View $this
 * @var array $lessons
 */
$title = 'Предметы';
$this->screen(View::A_HEADER, array('title' => $title));
$this->screen(View::A_TABLE_HEADER);?>
    <div class="row-fluid">
        <div class="span9">
            <h3><?=$title?></h3>
            <table class="table table-bordered table-condensed">
                <tr>
                    <th>Название</th>
                    <th>Сокращенное</th>
                    <th></th>
                </tr>
                <?if (is_array($lessons))
                    /**
                     * @var Lessons $l
                     */
                    foreach ($lessons as $l):?>
                        <tr style="background-color: #<?= $l->color ?>;">
                            <td><?=$l->namesub?></td>
                            <td><?=$l->shortnamesub?></td>
                            <td></td>
                        </tr>
                    <? endforeach;?>
            </table>
        </div>
        <div class="span3">
            <h3>Настройки</h3>
            <a href="/?action=lessons&refresh" class="btn btn-danger disabled">Изменить все цвета</a>
        </div>
    </div>
<? $this->screen(View::A_FOOTER);