<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e65ed6f6b4f61a23230bc23ec664272143a3597b3e32b25ccef7b7afa56de3b0 extends Twig_Template
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
        $__internal_04939b6bdfa7977e353dd43aad1cd3e215994032e690f821079233790b733377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04939b6bdfa7977e353dd43aad1cd3e215994032e690f821079233790b733377->enter($__internal_04939b6bdfa7977e353dd43aad1cd3e215994032e690f821079233790b733377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_28e080eb921a8408384717f10a483e433966af65b1a21e92210b0416d2cca9bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e080eb921a8408384717f10a483e433966af65b1a21e92210b0416d2cca9bf->enter($__internal_28e080eb921a8408384717f10a483e433966af65b1a21e92210b0416d2cca9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_04939b6bdfa7977e353dd43aad1cd3e215994032e690f821079233790b733377->leave($__internal_04939b6bdfa7977e353dd43aad1cd3e215994032e690f821079233790b733377_prof);

        
        $__internal_28e080eb921a8408384717f10a483e433966af65b1a21e92210b0416d2cca9bf->leave($__internal_28e080eb921a8408384717f10a483e433966af65b1a21e92210b0416d2cca9bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
