<?php
namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SequenceCommand extends Command
{
    public function configure()
    {
        $this->setName('app:task')
            ->addArgument('number', InputArgument::IS_ARRAY);

    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $numbers = $input->getArgument('number');

        $result = [];

        function Fibonacci($number)
        {
            if ($number == 1) {
                return 0;
            } else if ($number == 2) {
                return 1;
            } else
                return (Fibonacci($number - 1) +
                    Fibonacci($number - 2));
        }

        foreach ($numbers as $n){
            $result[] = Fibonacci($n);
        }

        foreach ($result as $value){
            $output->writeln($value);

        }
    }
}