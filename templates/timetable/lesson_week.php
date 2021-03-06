<?
/**
 * Занятие в режиме "Неделя"
 * @author: MUlt1mate
 * Date: 19.03.13
 * Time: 22:53
 *
 * @var bool $is_all_subgroup
 * @var bool $teacher_visible
 * @var bool $group_visible
 * @var Lesson $lesson
 */
$width = 95;
$left = 0;
if ($is_all_subgroup) {
    switch ($lesson->subgroup) {
        case 1:
            $width = 45;
            $left = 0;
            break;
        case 2:
            $width = 45;
            $left = 50;
            break;
    }
}
?>
<div class="lesson" lesson_id="<?= $lesson->id ?>" style="
    top: <?= $lesson->TimeOffset() ?>px;
    width:<?= $width ?>%;
    left:<?= $left ?>%;
    height:<?= ($lesson->duration - 2) ?>px;
    background:#<?= $lesson->subcolor ?>
    " onmouseover="FullWidth(this);" onmouseout="NormalWidth(this);"
     data-toggle="popover"
    >
    <div class="roof">
        <div class="time">
            <?=$lesson->get_time_begin()?> - <?=$lesson->get_time_end()?>
        </div>
        <div class="lesson_type">
            <?=$lesson->typelessonabbr?>
        </div>
    </div>
    <div class="lesson_name">
        <?=$lesson->lesson?>
    </div>
    <div class="footer">
        <?if ($teacher_visible) : ?>
            <div class="teacher">
                <?=$lesson->teacher?>
            </div>
        <? endif;?>
        <?if ($group_visible) : ?>
            <div class="group">
                <a class="flow" rel="tooltip" title="<?= $lesson->GroupFlowPopup ?>">
                    <?=$lesson->GroupFlowName?>
                </a>
            </div>
        <? endif;?>
    </div>
    <div class="room" style="background:#<?= $lesson->subcolor ?>;">
        <?=$lesson->get_room()?>
    </div>
</div>