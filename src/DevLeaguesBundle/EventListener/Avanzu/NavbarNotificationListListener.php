<?php
/**
 * NavbarNotificationListDemoListener.php
 * avanzu-admin
 * Date: 23.02.14
 */

namespace DevLeaguesBundle\EventListener\Avanzu;


use Avanzu\AdminThemeBundle\Event\NotificationListEvent;
use DevLeaguesBundle\Entity\Avanzu\Notification;

class NavbarNotificationListListener {


    public function onListNotifications(NotificationListEvent $event) {

        foreach($this->getNotifications() as $notify){
            $event->addNotification($notify);
        }

    }

    protected function getNotifications() {
        return array(
//            new Notification('some notification'),
        );
    }

}
