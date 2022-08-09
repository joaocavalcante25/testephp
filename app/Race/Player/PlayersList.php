<?php

declare(strict_types=1);

namespace Race\Player;

class PlayersList implements \Iterator, \Countable
{
    /**
     * @var Player[]
     */
    private $players = [];

    /**
     * @var int
     */
    private $position;
    /**
     * @param Player[] $players
     * @throws \InvalidArgumentException
     */
    public function __construct($players = [])
    {
        foreach ($players as $player) {
            if (!$player instanceof Player) {
                throw new \InvalidArgumentException();
            }
        }
        $this->position = 0;
        $this->players = $players;
    }

    /**
     * @param Player $player
     * @return void
     * @throws \InvalidArgumentException
     */
    public function joinPlayer(Player $player): void
    {
        /**
         * @todo: implement it
         *
         * Each player must be unique
         */
        if (!$this->$players->array_search($player)){
            $this->players->array_push($player);
        }
    }

    /**
     * @return Player[]
     */
    public function getPlayers(): array
    {
        return $this->players;
    }

    /**
     * @return Player|null
     */
    public function current(): ?Player
    {
        /**
         * @todo: implement it
         */
        return $this->players[$this->position];
    }

    /**
     * @return void
     */
    public function next(): void
    {
        /**
         * @todo: implement it
         */
        ++$this->position;
    }

    /**
     * @return int|null
     */
    public function key(): ?int
    {
        /**
         * @todo: implement it
         */
        return $this->position;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        /**
         * @todo: implement it
         */
        return isset($this->players[$this->position]);
    }

    /**
     * @return void
     */
    public function rewind(): void
    {
        /**
         * @todo: implement it
         */
        var_dump(__METHOD__);
        $this->position = 0;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        /**
         * @todo: implement it
         */
        return count($players);
    }
}
