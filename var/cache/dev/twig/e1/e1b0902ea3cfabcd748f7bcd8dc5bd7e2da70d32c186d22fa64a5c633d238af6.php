<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a6bb8661167b5fbd491aa4ba7cbcf009b59cd4c67bf836f92aea7da23d4d5fc6 extends Twig_Template
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
        $__internal_6c8a71cb19edeee02b726154081fbf90f6028f69a1fbd9a00058d7815316fe55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c8a71cb19edeee02b726154081fbf90f6028f69a1fbd9a00058d7815316fe55->enter($__internal_6c8a71cb19edeee02b726154081fbf90f6028f69a1fbd9a00058d7815316fe55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_66aacbf30cb40256722c926619f27c3c84504e38fe1b08148975160cc642ac5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66aacbf30cb40256722c926619f27c3c84504e38fe1b08148975160cc642ac5a->enter($__internal_66aacbf30cb40256722c926619f27c3c84504e38fe1b08148975160cc642ac5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_6c8a71cb19edeee02b726154081fbf90f6028f69a1fbd9a00058d7815316fe55->leave($__internal_6c8a71cb19edeee02b726154081fbf90f6028f69a1fbd9a00058d7815316fe55_prof);

        
        $__internal_66aacbf30cb40256722c926619f27c3c84504e38fe1b08148975160cc642ac5a->leave($__internal_66aacbf30cb40256722c926619f27c3c84504e38fe1b08148975160cc642ac5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
