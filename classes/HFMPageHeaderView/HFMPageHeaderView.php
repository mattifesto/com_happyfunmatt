<?php

final class HFMPageHeaderView {

    /**
     * @param model $model
     *
     * @return void
     */
    static function CBView_render(stdClass $model): void {
        $selectedMainMenuItemName = CBModel::valueToString(
            CBHTMLOutput::pageInformation(),
            'selectedMainMenuItemName'
        );

        ?>

        <header class="HFMPageHeaderView CBDarkTheme">
            <?php

            CBView::render((object)[
                'className' => 'CBMenuView',
                'menuID' => HFMMenu_main::ID(),
                'selectedItemName' => $selectedMainMenuItemName,
            ]);

            ?>
        </header>

        <?php
    }
}
