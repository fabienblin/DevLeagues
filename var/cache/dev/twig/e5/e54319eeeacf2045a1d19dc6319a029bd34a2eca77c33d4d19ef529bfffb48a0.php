<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ff7acb2ed09dd6bbe00e470d6a61fad05f6b265873bc840816ae634b744359b6 extends Twig_Template
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
        $__internal_adcd680bd4ee70fec8c040359829feedb6abf725c4b211e9882d432f7520185e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adcd680bd4ee70fec8c040359829feedb6abf725c4b211e9882d432f7520185e->enter($__internal_adcd680bd4ee70fec8c040359829feedb6abf725c4b211e9882d432f7520185e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b92360b10f8fadbe21fe49f196fa2eacafc2ecdcf48dcfe911c73f2385014be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92360b10f8fadbe21fe49f196fa2eacafc2ecdcf48dcfe911c73f2385014be8->enter($__internal_b92360b10f8fadbe21fe49f196fa2eacafc2ecdcf48dcfe911c73f2385014be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_adcd680bd4ee70fec8c040359829feedb6abf725c4b211e9882d432f7520185e->leave($__internal_adcd680bd4ee70fec8c040359829feedb6abf725c4b211e9882d432f7520185e_prof);

        
        $__internal_b92360b10f8fadbe21fe49f196fa2eacafc2ecdcf48dcfe911c73f2385014be8->leave($__internal_b92360b10f8fadbe21fe49f196fa2eacafc2ecdcf48dcfe911c73f2385014be8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
