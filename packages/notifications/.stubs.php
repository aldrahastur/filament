<?php

namespace Livewire\Features\SupportTesting {

    use Filament\Notifications\Notification;

    /**
     * @template-covariant T of object
     */
    class Testable {
        /**
         * @return T
         */
        public function assertNotified(Notification | string $notification = null) {}

        /**
         * @return T
         */
        public function assertNotNotified(Notification | string $notification = null) {}
    }

}
