<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_94acb9176b76c9fd0df24fb780a76545116d23822833472da1d188540d50b133 extends Twig_Template
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
        $__internal_293b617fd14012d60c47083f1811ee1933f5f9d66fbf56f216ebd73bc3fc013b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293b617fd14012d60c47083f1811ee1933f5f9d66fbf56f216ebd73bc3fc013b->enter($__internal_293b617fd14012d60c47083f1811ee1933f5f9d66fbf56f216ebd73bc3fc013b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_87efe4f0b2ea8a06a563d2e841ee7cae3565c30b9481960bcb5e3af3aca7c9b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87efe4f0b2ea8a06a563d2e841ee7cae3565c30b9481960bcb5e3af3aca7c9b9->enter($__internal_87efe4f0b2ea8a06a563d2e841ee7cae3565c30b9481960bcb5e3af3aca7c9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_293b617fd14012d60c47083f1811ee1933f5f9d66fbf56f216ebd73bc3fc013b->leave($__internal_293b617fd14012d60c47083f1811ee1933f5f9d66fbf56f216ebd73bc3fc013b_prof);

        
        $__internal_87efe4f0b2ea8a06a563d2e841ee7cae3565c30b9481960bcb5e3af3aca7c9b9->leave($__internal_87efe4f0b2ea8a06a563d2e841ee7cae3565c30b9481960bcb5e3af3aca7c9b9_prof);

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
