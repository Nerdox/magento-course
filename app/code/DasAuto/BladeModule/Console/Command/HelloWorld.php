<?php
/**
 * Created by PhpStorm.
 * User: domin
 * Date: 27. 10. 2021
 * Time: 15:19
 */

namespace DasAuto\BladeModule\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorld extends Command
{
    public function configure()
    {
        $this->setName("training:hello_world")
            ->setDescription("print hello world")
            ->setAliases(["hw"]);
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Hello World");
    }
}