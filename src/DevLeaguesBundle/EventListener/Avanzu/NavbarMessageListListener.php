<?php
/**
 * NavbarMessageListDemoListener.php
 * avanzu-admin
 * Date: 23.02.14
 */

namespace DevLeaguesBundle\EventListener\Avanzu;


use Avanzu\AdminThemeBundle\Event\MessageListEvent;
use DevLeaguesBundle\Entity\User;
use DevLeaguesBundle\Entity\Avanzu\Message;

class NavbarMessageListListener {

    public function onListMessages(MessageListEvent $event) {

        foreach($this->getMessages() as $msg) {
            $event->addMessage($msg);
        }
    }

    protected function getMessages() {
        return array(
//            new MessageModel(new User('Karl kettenkit'),'Dude! do something!', new \DateTime('-3 days')),
        );
    }

}
