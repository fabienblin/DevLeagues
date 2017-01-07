<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_367ea1204a337e711150cd1f1b3e1039c03ed3a8bd0886739fb1a9e0d95d22a7 extends Twig_Template
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
        $__internal_95f430a6c3ef6097bbf26000189de3a932fb39d4bdf8dedeec6ef311cf912140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f430a6c3ef6097bbf26000189de3a932fb39d4bdf8dedeec6ef311cf912140->enter($__internal_95f430a6c3ef6097bbf26000189de3a932fb39d4bdf8dedeec6ef311cf912140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_79f5fc1defb9c79d22275c75b42b98401be5e9cebcef2b47637f0d791837787c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f5fc1defb9c79d22275c75b42b98401be5e9cebcef2b47637f0d791837787c->enter($__internal_79f5fc1defb9c79d22275c75b42b98401be5e9cebcef2b47637f0d791837787c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_95f430a6c3ef6097bbf26000189de3a932fb39d4bdf8dedeec6ef311cf912140->leave($__internal_95f430a6c3ef6097bbf26000189de3a932fb39d4bdf8dedeec6ef311cf912140_prof);

        
        $__internal_79f5fc1defb9c79d22275c75b42b98401be5e9cebcef2b47637f0d791837787c->leave($__internal_79f5fc1defb9c79d22275c75b42b98401be5e9cebcef2b47637f0d791837787c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
