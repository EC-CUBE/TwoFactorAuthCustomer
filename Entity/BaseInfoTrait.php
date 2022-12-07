<?php

namespace Plugin\TwoFactorAuthCustomer42\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation\EntityExtension;

/**
 * @EntityExtension("Eccube\Entity\BaseInfo")
 */
trait BaseInfoTrait
{
    /**
     * 2段階認証機能の利用
     * @var bool
     * @ORM\Column(name="two_factor_auth_use", type="boolean", nullable=false, options={"default":false})
     */
    private bool $two_factor_auth_use;
    /**
     * @return bool
     */
    public function isTwoFactorAuthUse(): bool
    {
        return $this->two_factor_auth_use;
    }

    /**
     * @param bool $two_factor_auth_use
     */
    public function setTwoFactorAuthUse(bool $two_factor_auth_use): void
    {
        $this->two_factor_auth_use = $two_factor_auth_use;
    }

    /**
     * SMS通知の設定
     * @var bool
     * @ORM\Column(name="option_activate_sms", type="boolean", nullable=false, options={"default":false})
     */
    private bool $option_activate_sms;
    /**
     * @return bool
     */
    public function isOptionActivateSms(): bool
    {
        return $this->option_activate_sms;
    }

    /**
     * @param bool $option_activate_sms
     */
    public function setOptionActivateSms(bool $option_activate_sms): void
    {
        $this->option_activate_sms = $option_activate_sms;
    }

}
