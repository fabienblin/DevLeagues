<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a26b3db8fcca0b17d29b9c66eabb96226beabb9796edbb88c6bff06f715dcdf2 extends Twig_Template
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
        $__internal_75f13bb9f9d8bc6656dfd7aaf884225abf74dc7cb9911835d3fc94fd699d7162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f13bb9f9d8bc6656dfd7aaf884225abf74dc7cb9911835d3fc94fd699d7162->enter($__internal_75f13bb9f9d8bc6656dfd7aaf884225abf74dc7cb9911835d3fc94fd699d7162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_0140f12afddd5e590248a1730c8dc8521bd49b76891cf0a8fc24a40335e5d03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0140f12afddd5e590248a1730c8dc8521bd49b76891cf0a8fc24a40335e5d03c->enter($__internal_0140f12afddd5e590248a1730c8dc8521bd49b76891cf0a8fc24a40335e5d03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_75f13bb9f9d8bc6656dfd7aaf884225abf74dc7cb9911835d3fc94fd699d7162->leave($__internal_75f13bb9f9d8bc6656dfd7aaf884225abf74dc7cb9911835d3fc94fd699d7162_prof);

        
        $__internal_0140f12afddd5e590248a1730c8dc8521bd49b76891cf0a8fc24a40335e5d03c->leave($__internal_0140f12afddd5e590248a1730c8dc8521bd49b76891cf0a8fc24a40335e5d03c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
