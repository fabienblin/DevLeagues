<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_4086c07c664527717386f4df503cadee344c1f6e5c548bfea9cfe50c32408854 extends Twig_Template
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
        $__internal_6a2b06499c99683344402b1053f10376280338703b6c43506d114f13db175d70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a2b06499c99683344402b1053f10376280338703b6c43506d114f13db175d70->enter($__internal_6a2b06499c99683344402b1053f10376280338703b6c43506d114f13db175d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_1442698ac9ef5564160978f3b0d46cd822454f451c31f2e58f8e5f5f0139a6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1442698ac9ef5564160978f3b0d46cd822454f451c31f2e58f8e5f5f0139a6cb->enter($__internal_1442698ac9ef5564160978f3b0d46cd822454f451c31f2e58f8e5f5f0139a6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_6a2b06499c99683344402b1053f10376280338703b6c43506d114f13db175d70->leave($__internal_6a2b06499c99683344402b1053f10376280338703b6c43506d114f13db175d70_prof);

        
        $__internal_1442698ac9ef5564160978f3b0d46cd822454f451c31f2e58f8e5f5f0139a6cb->leave($__internal_1442698ac9ef5564160978f3b0d46cd822454f451c31f2e58f8e5f5f0139a6cb_prof);

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
