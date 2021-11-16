<?php

final class
HFMMenu_main {

    /**
     * @return void
     */
    static function
    CBInstall_install(
    ): void {
        $updater = CBModelUpdater::fetch(
            (object)[
                'className' => 'CBMenu',
                'ID' => HFMMenu_main::ID(),
                'title' => 'Website',
                'titleURI' => '/',
            ]
        );

        CBModelUpdater::save($updater);

        CB_StandardPageFrame::setDefaultMainMenuModelCBID(
            HFMMenu_main::ID()
        );
    }
    /* CBInstall_install() */



    /**
     * @return [string]
     */
    static function
    CBInstall_requiredClassNames(
    ): array {
        return [
            'CB_StandardPageFrame',
            'CBMenu',
            'CBModelUpdater',
        ];
    }
    /* CBInstall_requiredClassNames() */



    /**
     * @return ID
     */
    static function ID(): string {
        return 'cfe33c21e13e524f17ba9337d22ea1e21cf83643';
    }
}
