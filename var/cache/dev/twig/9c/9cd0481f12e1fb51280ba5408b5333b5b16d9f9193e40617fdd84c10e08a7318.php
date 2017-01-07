<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_582040dd9368d5eb4f03104331198d3f12631c6bef48f7660c51ea1f56c7873a extends Twig_Template
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
        $__internal_b53b508ad13f70e826fcce51cc417899b650a246086fc02bc062f144b156d95c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53b508ad13f70e826fcce51cc417899b650a246086fc02bc062f144b156d95c->enter($__internal_b53b508ad13f70e826fcce51cc417899b650a246086fc02bc062f144b156d95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_5f4437780188d8360593c584867970d42b157a9435378315a967b517487c1618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4437780188d8360593c584867970d42b157a9435378315a967b517487c1618->enter($__internal_5f4437780188d8360593c584867970d42b157a9435378315a967b517487c1618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b53b508ad13f70e826fcce51cc417899b650a246086fc02bc062f144b156d95c->leave($__internal_b53b508ad13f70e826fcce51cc417899b650a246086fc02bc062f144b156d95c_prof);

        
        $__internal_5f4437780188d8360593c584867970d42b157a9435378315a967b517487c1618->leave($__internal_5f4437780188d8360593c584867970d42b157a9435378315a967b517487c1618_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
