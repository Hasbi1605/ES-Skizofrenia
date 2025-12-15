{{-- Shared styles for detail pages --}}
<style>
/* Typography Improvements */
.content-article {
    margin-bottom: 2.5rem;
}

.section-heading {
    color: var(--heading-color);
    font-weight: 700;
    font-size: 1.5rem;
    margin-bottom: 1.25rem;
    padding-bottom: 0.75rem;
    border-bottom: 2px solid rgba(0, 127, 127, 0.1);
}

.lead-text {
    font-size: 1.1rem;
    line-height: 1.8;
    color: var(--default-color);
    margin-bottom: 1.25rem;
}

.body-text {
    font-size: 1rem;
    line-height: 1.8;
    color: #555;
    margin-bottom: 1rem;
}

/* Highlight Box */
.highlight-box {
    display: flex;
    gap: 1.25rem;
    padding: 1.5rem;
    margin: 2rem 0;
    background: linear-gradient(135deg, rgba(0, 127, 127, 0.05) 0%, rgba(0, 127, 127, 0.02) 100%);
    border-left: 4px solid var(--accent-color);
    border-radius: 0 12px 12px 0;
}

.highlight-icon {
    flex-shrink: 0;
    width: 48px;
    height: 48px;
    background: var(--accent-color);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
}

.highlight-content h4 {
    color: var(--accent-color);
    font-weight: 600;
    font-size: 1.1rem;
    margin-bottom: 0.5rem;
}

.highlight-content p {
    margin: 0;
    line-height: 1.7;
    color: #555;
}

/* Symptom Cards */
.symptom-card {
    background: white;
    border-radius: 16px;
    padding: 1.5rem;
    height: 100%;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    border: 1px solid rgba(0, 0, 0, 0.04);
    transition: all 0.3s ease;
}

.symptom-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
}

.symptom-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
}

.symptom-icon {
    width: 48px;
    height: 48px;
    background: linear-gradient(135deg, rgba(0, 127, 127, 0.1) 0%, rgba(0, 127, 127, 0.05) 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--accent-color);
    font-size: 1.25rem;
}

.symptom-header h5 {
    margin: 0;
    font-weight: 700;
    color: var(--heading-color);
    font-size: 1.1rem;
}

.symptom-desc {
    color: #666;
    line-height: 1.6;
    margin-bottom: 0.75rem;
    font-size: 0.95rem;
}

.symptom-list {
    margin: 0;
    padding-left: 1.25rem;
}

.symptom-list li {
    color: #555;
    line-height: 1.7;
    margin-bottom: 0.5rem;
    font-size: 0.95rem;
}

.symptom-list li:last-child {
    margin-bottom: 0;
}

/* Treatment Accordion */
.treatment-accordion {
    margin-top: 1.5rem;
}

.treatment-accordion .accordion-item {
    border: none;
    margin-bottom: 0.75rem;
    border-radius: 12px !important;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
}

.treatment-accordion .accordion-button {
    font-weight: 600;
    padding: 1rem 1.25rem;
    background: white;
    color: var(--heading-color);
}

.treatment-accordion .accordion-button:not(.collapsed) {
    background: rgba(0, 127, 127, 0.05);
    color: var(--accent-color);
}

.treatment-accordion .accordion-button i {
    color: var(--accent-color);
}

.treatment-accordion .accordion-body {
    line-height: 1.7;
    color: #555;
    padding: 1rem 1.25rem 1.25rem;
}

/* Sidebar */
.sidebar-sticky {
    position: sticky;
    top: 100px;
}

.sidebar-card {
    background: white;
    padding: 1.75rem;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    border: 1px solid rgba(0, 0, 0, 0.04);
    margin-bottom: 1.5rem;
}

.sidebar-title {
    color: var(--heading-color);
    font-weight: 700;
    font-size: 1.1rem;
    margin-bottom: 1.25rem;
    padding-bottom: 0.75rem;
    border-bottom: 2px solid rgba(0, 127, 127, 0.1);
}

.sidebar-links {
    list-style: none;
    margin: 0;
    padding: 0;
}

.sidebar-links li {
    margin-bottom: 0.75rem;
    padding-bottom: 0.75rem;
    border-bottom: 1px solid rgba(0, 0, 0, 0.06);
}

.sidebar-links li:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.sidebar-links a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: var(--default-color);
    text-decoration: none;
    font-size: 0.95rem;
    transition: all 0.3s ease;
}

.sidebar-links a:hover {
    color: var(--accent-color);
    padding-left: 8px;
}

.sidebar-links a i {
    font-size: 0.8rem;
    opacity: 0;
    transition: all 0.3s ease;
}

.sidebar-links a:hover i {
    opacity: 1;
}

/* CTA Box */
.sidebar-cta {
    background: linear-gradient(135deg, var(--accent-color) 0%, #004d4d 100%);
    padding: 2rem;
    border-radius: 16px;
    text-align: center;
    color: white;
}

.sidebar-cta i {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    opacity: 0.9;
}

.sidebar-cta h4 {
    color: white;
    font-weight: 700;
    margin-bottom: 0.75rem;
}

.sidebar-cta p {
    font-size: 0.9rem;
    opacity: 0.85;
    margin-bottom: 1.25rem;
    line-height: 1.5;
}

.sidebar-cta .btn {
    font-weight: 600;
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
    color: var(--accent-color);
}

.sidebar-cta .btn:hover {
    background: rgba(255, 255, 255, 0.9);
}
</style>
