<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_17f2da82e9784033f9bc85d013bb663e3e63a75e8e3d6c4be1ebf1b6edff5872 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2249201be9fc20e42a30871b8d5cd72adc50c66bda514a55ccc0a532609ddc7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2249201be9fc20e42a30871b8d5cd72adc50c66bda514a55ccc0a532609ddc7e->enter($__internal_2249201be9fc20e42a30871b8d5cd72adc50c66bda514a55ccc0a532609ddc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_aa4413a37880c7f6da23ff8caa7f8214a33c8b513d050f558049c8d8913094d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa4413a37880c7f6da23ff8caa7f8214a33c8b513d050f558049c8d8913094d9->enter($__internal_aa4413a37880c7f6da23ff8caa7f8214a33c8b513d050f558049c8d8913094d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2249201be9fc20e42a30871b8d5cd72adc50c66bda514a55ccc0a532609ddc7e->leave($__internal_2249201be9fc20e42a30871b8d5cd72adc50c66bda514a55ccc0a532609ddc7e_prof);

        
        $__internal_aa4413a37880c7f6da23ff8caa7f8214a33c8b513d050f558049c8d8913094d9->leave($__internal_aa4413a37880c7f6da23ff8caa7f8214a33c8b513d050f558049c8d8913094d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
