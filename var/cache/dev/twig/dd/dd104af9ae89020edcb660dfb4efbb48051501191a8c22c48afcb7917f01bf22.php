<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_11a4a6b4eb759f7c9d08d221093c40dbfb1d16e102321da7133192ba2ef2f8f3 extends Twig_Template
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
        $__internal_66a0dbfdc8f5a0c48abb7117771e010dcac043872616812a08173fe18558ed0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a0dbfdc8f5a0c48abb7117771e010dcac043872616812a08173fe18558ed0a->enter($__internal_66a0dbfdc8f5a0c48abb7117771e010dcac043872616812a08173fe18558ed0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e5db026e7571cf3b51f6e234609ea5ac7762fa94a21411be59d9aeed7ec51c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5db026e7571cf3b51f6e234609ea5ac7762fa94a21411be59d9aeed7ec51c95->enter($__internal_e5db026e7571cf3b51f6e234609ea5ac7762fa94a21411be59d9aeed7ec51c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_66a0dbfdc8f5a0c48abb7117771e010dcac043872616812a08173fe18558ed0a->leave($__internal_66a0dbfdc8f5a0c48abb7117771e010dcac043872616812a08173fe18558ed0a_prof);

        
        $__internal_e5db026e7571cf3b51f6e234609ea5ac7762fa94a21411be59d9aeed7ec51c95->leave($__internal_e5db026e7571cf3b51f6e234609ea5ac7762fa94a21411be59d9aeed7ec51c95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
