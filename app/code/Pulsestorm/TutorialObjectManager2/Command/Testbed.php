<?php
namespace Pulsestorm\TutorialObjectManager2\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Testbed extends AbstractCommand
{
    protected function configure()
    {
        $this->setName('ps:tutorial-object-manager-2');
        $this->setDescription('A cli playground for testing commands');
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $manager = $this->getObjectManager();
        $helper = $this->getObjectManager()->create(
            '\Pulsestorm\TutorialObjectManager2\Model\Example');
        $output->writeln(
            $helper->sendHelloAgainMessage()
        );
        
    }
}