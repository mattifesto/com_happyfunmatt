<?php

final class HFMMenu_main {

    /**
     * @return void
     */
    static function CBInstall_install(): void {
        $updater = CBModelUpdater::fetch(
            (object)[
                'className' => 'CBMenu',
                'ID' => HFMMenu_main::ID(),
                'title' => 'Website',
                'titleURI' => '/',
            ]
        );

        CBModelUpdater::save($updater);
    }

    /**
     * @return [string]
     */
    static function CBInstall_requiredClassNames(): array {
        return [
            'CBMenu',
            'CBModelUpdater',
        ];
    }

    /**
     * @return ID
     */
    static function ID(): string {
        return 'cfe33c21e13e524f17ba9337d22ea1e21cf83643';
    }
}
